<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('menus.index');
    }
    public function view(Admin $user, Menu $menu)
    {
        return $user->can('menus.update');
    }

    public function create(Admin $user)
    {
        return $user->can('menus.create');
    }

    public function update(Admin $user, Menu $menu)
    {
        return $user->can('menus.update');
    }

    public function delete(Admin $user, Menu $menu)
    {
        return $user->can('menus.delete');
    }
}
