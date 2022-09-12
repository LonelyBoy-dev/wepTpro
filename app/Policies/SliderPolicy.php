<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SliderPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('sliders.index');
    }

    public function create(Admin $user)
    {
        return $user->can('sliders.create');
    }

    public function update(Admin $user, Slider $slider)
    {
        return $user->can('sliders.update');
    }

    public function delete(Admin $user, Slider $slider)
    {
        return $user->can('sliders.delete');
    }
}
