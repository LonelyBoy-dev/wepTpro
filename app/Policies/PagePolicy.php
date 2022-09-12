<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Page;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagePolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('pages.index');
    }

    public function create(Admin $user)
    {
        return $user->can('pages.create');
    }

    public function update(Admin $user, Page $page)
    {
        return $user->can('pages.update');
    }

    public function delete(Admin $user, Page $page)
    {
        return $user->can('pages.delete');
    }
}
