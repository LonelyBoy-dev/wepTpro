<?php

namespace App\Http\Controllers\Back;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Comment::class, 'comment');
    }

    public function index(Request $request)
    {
        $comments = Comment::filter($request)->paginate(15);

        return view('back.comments.index', compact('comments'));
    }

    public function show(Comment $comment)
    {
        return view('back.comments.show', compact('comment'))->render();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return response('success');
    }

    public function update(Comment $comment, Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'body'   => 'required',
            'replay' => 'nullable|string',
        ]);

        $comment->update([
            'body'   => $request->body,
            'status' => $request->status
        ]);

        if ($request->replay) {
            $comment->commentable->comments()->create([
                'body'       => $request->replay,
                'admin_id'    => auth('adminPanel')->user()->id,
                'status'     => 'accepted',
                'commentable_id'       => $comment->commentable_id,
                'commentable_type'       => $comment->commentable_type,
                'comment_id' => $comment->id,
            ]);
        }

        return response($comment);
    }
}
