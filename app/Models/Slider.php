<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'caption', 'status'];

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    
}
