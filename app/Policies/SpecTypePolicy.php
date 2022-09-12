<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\SpecType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpecTypePolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('products.spectypes');
    }

    public function update(Admin $user, SpecType $specType)
    {
        return $user->can('products.spectypes');
    }

    public function delete(Admin $user, SpecType $specType)
    {
        return $user->can('products.spectypes');
    }
}
