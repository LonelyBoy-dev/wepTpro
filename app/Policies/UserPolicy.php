<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('users.index');
    }

    public function view(Admin $user, User $model)
    {
        return $user->can('users.view');
    }

    public function create(Admin $user)
    {
        return $user->can('users.create');
    }

    public function update(Admin $user, User $model)
    {
        return $user->can('users.update') && ($model->level != 'creator');
    }

    public function delete(Admin $user, User $model)
    {
        return $user->can('users.delete') && ($model->level != 'creator');
    }
}
