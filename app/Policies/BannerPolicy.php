<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BannerPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('banners.index');
    }

    public function create(Admin $user)
    {
        return $user->can('banners.create');
    }

    public function update(Admin $user, Banner $banner)
    {
        return $user->can('banners.update');
    }

    public function delete(Admin $user, Banner $banner)
    {
        return $user->can('banners.delete');
    }
}
