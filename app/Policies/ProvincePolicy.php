<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Province;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProvincePolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('carriers.provinces.index');
    }

    public function view(Admin $user, Province $province)
    {
        return $user->can('carriers.provinces.show');
    }

    public function create(Admin $user)
    {
        return $user->can('carriers.provinces.create');
    }

    public function update(Admin $user, Province $province)
    {
        return $user->can('carriers.provinces.update');
    }

    public function delete(User $user, Province $province)
    {
        return $user->can('carriers.provinces.delete');
    }
}
