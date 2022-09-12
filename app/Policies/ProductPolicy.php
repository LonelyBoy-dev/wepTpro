<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('products.index');
    }

    public function create(Admin $user)
    {
        return $user->can('products.create');
    }

    public function update(Admin $user, Product $product)
    {
        return $user->can('products.update');
    }

    public function delete(Admin $user, Product $product)
    {
        return $user->can('products.delete');
    }
}
