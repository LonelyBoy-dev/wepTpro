<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('contacts.index');
    }

    public function view(Admin $user, Contact $contact)
    {
        return $user->can('contacts.view');
    }

    public function delete(Admin $user, Contact $contact)
    {
        return $user->can('contacts.delete');
    }
}
