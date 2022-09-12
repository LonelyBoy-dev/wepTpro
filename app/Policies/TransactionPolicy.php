<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransactionPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('payments.transactions.index');
    }

    public function view(Admin $user, Transaction $transaction)
    {
        return $user->can('payments.transactions.view');
    }

    public function delete(Admin $user, Transaction $transaction)
    {
        return $user->can('payments.transactions.delete');
    }
}
