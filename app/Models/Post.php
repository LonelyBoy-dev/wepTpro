<?php

namespace App\Models;

use App\Traits\Taggable;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use sluggable, Taggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug',
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getShortContentAttribute()
    {
        $content = strip_tags($this->content);

        return Str::words($content, 15);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
/*
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }*/

    public function link()
    {
        return route('front.posts.show', ['post' => $this]);
    }

    public function scopePublished($query)
    {
        $query->where('published', true)->where(function ($q) {
            $q->where('publish_date', null)->orWhere('publish_date', '<=', Carbon::now());
        });

        return $query;
    }

    public function isPublished()
    {
        return ($this->published && (!$this->publish_date || $this->publish_date <= Carbon::now()));
    }

    public function isShowable()
    {
        if ($this->isPublished()) {
            return true;
        }

        if (auth()->check() && auth()->user()->can('posts')) {
            return true;
        }

        return false;
    }
}
