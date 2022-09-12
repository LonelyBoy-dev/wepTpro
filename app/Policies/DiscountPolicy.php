<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Discount;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiscountPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('discounts.index');
    }

    public function create(Admin $user)
    {
        return $user->can('discounts.create');
    }

    public function update(Admin $user, Discount $discount)
    {
        return $user->can('discounts.update');
    }

    public function delete(Admin $user, Discount $discount)
    {
        return $user->can('discounts.delete');
    }
}
