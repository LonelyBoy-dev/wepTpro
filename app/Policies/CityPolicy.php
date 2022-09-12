<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\City;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CityPolicy
{
    use HandlesAuthorization;

    public function create(Admin $user)
    {
        return $user->can('carriers.cities.create');
    }

    public function update(Admin $user, City $city)
    {
        return $user->can('carriers.cities.update');
    }

    public function delete(Admin $user, City $city)
    {
        return $user->can('carriers.cities.delete');
    }
}
