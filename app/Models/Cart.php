<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'price_id', 'id'])->withTimestamps();
    }

    public function getPriceAttribute()
    {
        $price = 0;

        foreach ($this->products as $product) {
            $price += ($product->prices()->find($product->pivot->price_id)->tomanPrice() * $product->pivot->quantity);
        }

        return $price;
    }

    public function discountPrice()
    {
        $price = 0;

        foreach ($this->products as $product) {
            $product_price = $product->prices()->find($product->pivot->price_id);
            $price += ($product_price->discountPrice() * $product->pivot->quantity);
        }

        return $price;
    }

    public function finalPrice($city_id = null, $carrier_id = null)
    {
        $price  = $this->discountPrice() + $this->shippingCostAmount($city_id, $carrier_id);
        $price -= $this->discountCodeTotal();

        return intval($price);
    }

    public function getQuantityAttribute()
    {
        $quantity = 0;

        foreach ($this->products as $product) {
            $quantity += $product->pivot->quantity;
        }

        return $quantity;
    }

    public function shippingCostAmount($city_id = null, $carrier_id = null)
    {
        if (!$this->hasPhysicalProduct()) {
            return 0;
        }

        if ($city_id && $carrier_id) {

            $carrier_result = $this->canUseCarrier($carrier_id, $city_id);

            if ($carrier_result['status']) {
                $carrier       = $carrier_result['carrier'];
                $cart_weight   = $this->weight();

                if ($carrier->carrige_forward || ($carrier->free_shipping_weight !== null && $carrier->free_shipping_weight <= $cart_weight)) {
                    return 0;
                }

                if ($carrier->free_shipping_price !== null && $carrier->free_shipping_price <= $this->discountPrice()) {
                    return 0;
                }

                $tariff = $carrier->getCityTarif($city_id, $cart_weight);

                $shipping_cost = $tariff->shipping_cost;

                $carrier_max_weight = $carrier->max_package_weight;

                if ($carrier_max_weight && $cart_weight > $carrier_max_weight) {
                    $weight_diff = ($cart_weight - $carrier_max_weight) / 1000;

                    $shipping_cost += ((int) $weight_diff * $carrier->extra_cost);
                }

                return $shipping_cost;
            }
        }

        return 0;
    }

    public function shippingCost($city_id = null, $carrier_id = null)
    {
        if (!$this->hasPhysicalProduct()) {
            return '???????? ??????????';
        }

        $amount = $this->shippingCostAmount($city_id, $carrier_id);

        if ($carrier_id) {
            $carrier = Carrier::find($carrier_id);

            if ($carrier->carrige_forward) {
                return '???? ???????? ??????????';
            }
        }

        if ($city_id) {
            if ($amount == 0) {
                return '????????????';
            }

            return number_format($amount) . ' ??????????';
        }

        return '???????????? ???? ????????';
    }

    public function totalDiscount()
    {
        $discount = 0;

        foreach ($this->products as $product) {
            $product_price = $product->prices()->find($product->pivot->price_id);

            $discount += ($product_price->tomanPrice() * $product->pivot->quantity) - ($product_price->discountPrice() * $product->pivot->quantity);
        }

        return $discount + $this->discountCodeTotal();
    }

    public function canUseDiscount($code = null)
    {
        if (!$code) {
            $discount = $this->discount;
        } else {
            $discount = Discount::where('code', $code)->where('published', true)->first();
        }

        if (!$discount || !$discount->published) {
            return [
                'status'  => false,
                'message' => '???? ?????????? ???????? ?????? ?????????? ?????? ????????.'
            ];
        }

        if (Carbon::parse($discount->start_date)->isFuture()) {
            return [
                'status'  => false,
                'message' => '?????????? ???????? ???? ?????????? ?????? ???????????? ??????.'
            ];
        }

        if (Carbon::parse($discount->end_date)->isPast()) {
            return [
                'status'  => false,
                'message' => '?????????? ?????????????? ???? ???? ?????????? ???? ?????????? ?????????? ??????.'
            ];
        }

        if ($discount->users()->count() && !$discount->users()->find(auth()->user()->id)) {
            return [
                'status'  => false,
                'message' => '?????? ???????? ???? ?????????????? ???? ?????? ???? ?????????? ????????????.'
            ];
        }

        if ($discount->only_first_purchase && auth()->user()->orders()->notCanceled()->count()) {
            return [
                'status'  => false,
                'message' => '?????? ?????????? ?????? ?????????? ?????????? ???????? ????????????.'
            ];
        }

        if ($discount->quantity !== null && $discount->orders()->notCanceled()->count() >= $discount->quantity) {
            return [
                'status'  => false,
                'message' => '?????????? ?????????????? ???? ???? ?????????? ???? ?????????? ???????? ??????.'
            ];
        }

        if ($discount->quantity_per_user !== null && $discount->orders()->notCanceled()->where('user_id', auth()->user()->id)->count() >= $discount->quantity_per_user) {
            return [
                'status'  => false,
                'message' => '?????????? ?????????????? ?????? ???? ?????? ???? ?????????? ???? ?????????? ?????????? ??????.'
            ];
        }

        if ($discount->least_price !== null && $this->price < $discount->least_price) {
            return [
                'status'  => false,
                'message' => "?????????? ???????? ?????????? ???????? ?????? ???? ?????????? " . number_format($discount->least_price) . " ?????????? ???? ????????."
            ];
        }

        if ($discount->least_products_count && $this->products()->sum('cart_product.quantity') < $discount->least_products_count) {
            return [
                'status'  => false,
                'message' => "?????????? ?????????? ?????????? ?????????? ???????? ?????? ???? ?????????? " . $discount->least_products_count . " ?????? ???? ????????."
            ];
        }

        if ($discount->type == 'amount' && $this->price < $discount->amount) {
            return [
                'status'  => false,
                'message' => "???????? ?????????? ?????????? ???? ???????? ???????????? ??????."
            ];
        }

        return ['status' => true, 'message' => 'ok'];
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }

    public function discountCodeTotal()
    {
        $discount = $this->discount;

        if (!$discount) {
            return 0;
        }

        $price = $this->includeDiscountProductsPrice();

        if ($discount->type == 'amount') {
            return $price > $discount->amount ? $discount->amount : $price;
        }

        $discount_amount = $price * ($discount->amount / 100);

        if ($discount->discount_ceiling && $discount_amount > $discount->discount_ceiling) {
            return $discount->discount_ceiling;
        }

        return $discount_amount;
    }

    public function includeDiscountProductsPrice()
    {
        $query = $this->products();

        if ($this->discount->include_type == 'product') {
            $include_products   = $this->discount->includeProducts()->pluck('products.id');
            $query->whereIn('products.id', $include_products);
        }

        if ($this->discount->include_type == 'category') {
            $include_categories = [];
            $categories         = $this->discount->includeCategories()->pluck('categories.id');

            $categories = Category::whereIn('id', $categories)->get();

            foreach ($categories as $category) {
                $include_categories = array_merge($include_categories, $category->allChildCategories());
            }

            $query->whereHas('categories', function ($q) use ($include_categories) {
                $q->whereIn('categories.id', $include_categories);
            });
        }

        if ($this->discount->exclude_type == 'product') {
            $exclude_products   = $this->discount->excludeProducts()->pluck('products.id');
            $query->whereNotIn('products.id', $exclude_products);
        }

        if ($this->discount->exclude_type == 'category') {
            $exclude_categories = $this->discount->excludeCategories()->pluck('categories.id');

            $query->whereDoesntHave('categories', function ($q) use ($exclude_categories) {
                $q->whereIn('categories.id', $exclude_categories);
            });
        }

        $price = 0;

        foreach ($query->get() as $product) {
            $product_price = $product->prices()->find($product->pivot->price_id);

            if (!$product_price->discount || !$this->discount->not_discount_products) {
                $price += ($product_price->price * $product->pivot->quantity);
            }
        }

        return $price;
    }

    public function hasPhysicalProduct()
    {
        foreach ($this->products as $product) {
            if ($product->isPhysical()) {
                return true;
            }
        }

        return false;
    }

    public function weight()
    {
        $weight = 0;

        foreach ($this->products as $product) {
            $weight += $product->weight * $product->pivot->quantity;
        }

        return $weight;
    }

    public function canUseCarrier($carrier_id, $city_id = null)
    {
        $carrier = Carrier::active()->find($carrier_id);

        if (!$carrier) {
            return [
                'status'  => false,
                'message' => '?????? ?????????? ???????? ??????!'
            ];
        }

        $cart_weight = $this->weight();

        if ($carrier->max_package_weight && $carrier->max_package_weight < $cart_weight && !$carrier->extra_cost) {
            return [
                'status'  => false,
                'message' => '?????? ?????????????? ?????????? ?????????? ???? ???? ???????? ??????'
            ];
        }

        if ($carrier->min_package_weight && $carrier->min_package_weight > $cart_weight) {
            return [
                'status'  => false,
                'message' => '?????? ?????????????? ?????????? ???????? ???? ???? ???????? ??????'
            ];
        }

        if ($carrier->covered_cities != 'all') {
            if (!$carrier->cities()->find($city_id)) {
                return [
                    'status'  => false,
                    'message' => '?????? ?????????? ???????? ?????? ???????? ?????? ?????? ????????'
                ];
            }
        }

        if (!$carrier->carrige_forward) {
            $is_within_province = $carrier->province->cities()->find($city_id);

            if ($is_within_province && !$carrier->tariffs()->where('type', 'within_province')->where(function ($query) use ($carrier, $cart_weight) {
                if (!$carrier->extra_cost) {
                    $query->where('max_weight', '>=', $cart_weight);
                }
            })->exists()) {
                return [
                    'status'  => false,
                    'message' => '?????????? ???????? ???????????? ???????? ?????? ?????????? ?????? ???????? ??????'
                ];
            } else if (!$is_within_province && !$carrier->tariffs()->where('type', 'extra_province')->where(function ($query) use ($carrier, $cart_weight) {
                if (!$carrier->extra_cost) {
                    $query->where('max_weight', '>=', $cart_weight);
                }
            })->exists()) {
                return [
                    'status'  => false,
                    'message' => '?????????? ???????? ???????????? ???????? ?????? ?????????? ?????? ???????? ??????'
                ];
            }
        }

        return [
            'status'  => true,
            'message' => 'ok',
            'carrier' => $carrier,
        ];
    }
}
