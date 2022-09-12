<?php

namespace Modules\Features\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['ordering','title','body','image','id'];

    protected static function newFactory()
    {
        return \Modules\Features\Database\factories\FeatureFactory::new();
    }
}
