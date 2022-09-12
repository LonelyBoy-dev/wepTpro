<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('tickets.index');
    }

    public function view(Admin $user, Ticket $ticket)
    {
        return $user->can('tickets.show');
    }

    public function create(Admin $user)
    {
        return $user->can('tickets.create');
    }

    public function update(Admin $user, Ticket $ticket)
    {
        return $user->can('tickets.update');
    }

    public function delete(Admin $user, Ticket $ticket)
    {
        return $user->can('tickets.delete');
    }
}
