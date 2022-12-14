<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $guarded = ['id'];

    public function options()
    {
        return $this->hasMany(WidgetOption::class);
    }

    public function option($key, $default = null)
    {
        return $this->options->where('key', $key)->first()->value ?? $default;
    }


    public function type()
    {
        return config('front.home-widgets.' . $this->key . '.title', $this->key);
    }
}
