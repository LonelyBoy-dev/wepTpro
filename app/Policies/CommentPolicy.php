<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return $user->can('comments.index');
    }

    public function view(Admin $user, Comment $comment)
    {
        return $user->can('comments.view');
    }

    public function update(Admin $user, Comment $comment)
    {
        return $user->can('comments.update');
    }

    public function delete(Admin $user, Comment $comment)
    {
        return $user->can('comments.delete');
    }
}
