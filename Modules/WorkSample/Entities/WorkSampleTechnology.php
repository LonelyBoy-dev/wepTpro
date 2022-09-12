<?php

namespace Modules\WorkSample\Entities;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkSampleTechnology extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\WorkSample\Database\factories\WorkSampleTechnologyFactory::new();
    }
    public function worksamples()
    {
            return $this->belongsToMany(WorkSample::class);

    }
}
