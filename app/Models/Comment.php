<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\WorkSample\Entities\WorkSample;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function post()
    {
        return $this->hasOne(Post::class);
    }
    public function work_sample()
    {
        return $this->hasOne(WorkSample::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function scopeFilter($query, $request)
    {
        if ($request->status) {
            $query->where('status', $request->status);
        }

        switch ($request->ordering) {
            case 'oldest': {
                    $query->oldest();
                    break;
                }
            default: {
                    $query->latest();
                }
        }

        return $query;
    }

    public function name()
    {
        if ($this->user) {
            return $this->user->fullname;
        }

        return $this->name;
    }
}
