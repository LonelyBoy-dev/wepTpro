<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LinkPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('links.index');
    }

    public function create(Admin $user)
    {
        return $user->can('links.create');
    }

    public function update(Admin $user, Link $link)
    {
        return $user->can('links.update');
    }

    public function delete(Admin $user, Link $link)
    {
        return $user->can('links.delete');
    }
}
