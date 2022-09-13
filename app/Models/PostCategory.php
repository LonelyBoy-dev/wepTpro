<?php

namespace App\Models;

use App\Traits\Taggable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table="category_post";
    use HasFactory;

    protected $fillable=[
      'post_id',
      'category_id'
    ];

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
