<?php

namespace Modules\SpecialComments\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpecialComment extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\SpecialComments\Database\factories\SpecialCommentFactory::new();
    }
}
