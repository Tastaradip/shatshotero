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

    public function getImage()
    {
        $image = $this->images()->where('type', '1')->first();
        if (!empty($image)) {
            return $image->url;
        }
        return '';
    }
    
}
