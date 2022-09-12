<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Filter;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilterPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('filters.index');
    }

    public function create(Admin $user)
    {
        return $user->can('filters.create');
    }

    public function update(Admin $user, Filter $filter)
    {
        return $user->can('filters.update');
    }

    public function delete(Admin $user, Filter $filter)
    {
        return $user->can('filters.delete');
    }
}
