<?php

namespace App\Policies;

use App\Http\Middleware\Admin;
use App\Models\AttributeGroup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AttributeGroupPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('attributes.groups.index');
    }

    public function view(Admin $user, AttributeGroup $attributeGroup)
    {
        return $user->can('attributes.groups.show');
    }

    public function create(Admin $user)
    {
        return $user->can('attributes.groups.create');
    }

    public function update(Admin $user, AttributeGroup $attributeGroup)
    {
        return $user->can('attributes.groups.update');
    }

    public function delete(Admin $user, AttributeGroup $attributeGroup)
    {
        return $user->can('attributes.groups.delete');
    }
}
