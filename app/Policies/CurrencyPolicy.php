<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Currency;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CurrencyPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('payments.currencies');
    }

    public function create(Admin $user)
    {
        return $user->can('payments.currencies');
    }

    public function update(Admin $user, Currency $currency)
    {
        return $user->can('payments.currencies');
    }

    public function delete(Admin $user, Currency $currency)
    {
        return $user->can('payments.currencies');
    }
}
