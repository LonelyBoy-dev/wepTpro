<?php

namespace Modules\WorkSample\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkSampleCategory extends Model
{
    use HasFactory;
        protected $table="category_work_sample";
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\WorkSample\Database\factories\WorkSampleCategoryFactory::new();
    }
    public function workSample()
    {
        return $this->belongsToMany(WorkSample::class);
    }
}
