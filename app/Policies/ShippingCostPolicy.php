<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\ShippingCost;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShippingCostPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('carriers.shipping-cost');
    }

    public function create(Admin $user)
    {
        return $user->can('carriers.shipping-cost');
    }

    public function delete(Admin $user, ShippingCost $shipping_cost)
    {
        return $user->can('carriers.shipping-cost');
    }
}
