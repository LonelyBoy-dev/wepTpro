<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\User;
use App\Models\Widget;
use Illuminate\Auth\Access\HandlesAuthorization;

class WidgetPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('themes.widgets');
    }

    public function create(Admin $user)
    {
        return $user->can('themes.widgets');
    }

    public function update(Admin $user, Widget $widget)
    {
        return $user->can('themes.widgets');
    }

    public function delete(Admin $user, Widget $widget)
    {
        return $user->can('themes.widgets');
    }
}
