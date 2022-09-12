<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('orders.index');
    }

    public function view(Admin $user, Order $order)
    {
        return $user->can('orders.view');
    }

    public function update(Admin $user, Order $order)
    {
        return $user->can('orders.update');
    }

    public function delete(Admin $user, Order $order)
    {
        return $user->can('orders.delete');
    }
}
