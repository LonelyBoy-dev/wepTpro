<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('roles.index');
    }

    public function create(Admin $user)
    {
        return $user->can('roles.create');
    }

    public function update(Admin $user, Role $role)
    {
        return $user->can('roles.update');
    }

    public function delete(Admin $user, Role $role)
    {
        return $user->can('roles.delete');
    }
}
