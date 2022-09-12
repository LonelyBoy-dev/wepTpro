<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\ShippingCost;
use Illuminate\Http\Request;

class ShippingCostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(ShippingCost::class, 'shipping_cost');
    }

    public function index()
    {
        $shipping_costs = ShippingCost::all();
        $provinces = Province::all();

        return view('back.shipping-costs.index', compact('shipping_costs', 'provinces'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'province_id' => 'required|exists:provinces,id',
            'city_id'     => 'required|exists:cities,id',
            'price'       => 'required|integer',
            'cost'        => 'required|integer',
        ]);

        ShippingCost::updateOrCreate(
            [
                'city_id' => $request->city_id,
                'price'   => $request->price,
            ],
            [
                'cost'    => $request->cost,
            ]
        );
    }

    public function destroy(ShippingCost $shipping_cost)
    {
        $shipping_cost->delete();

        return response('success');
    }
}
