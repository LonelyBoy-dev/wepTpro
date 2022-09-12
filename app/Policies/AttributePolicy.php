<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Attribute;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AttributePolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('attributes.index');
    }

    public function create(Admin $user)
    {
        return $user->can('attributes.create');
    }

    public function update(Admin $user, Attribute $attribute)
    {
        return $user->can('attributes.update');
    }

    public function delete(Admin $user, Attribute $attribute)
    {
        return $user->can('attributes.delete');
    }
}
