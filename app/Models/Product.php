<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'type_id', 'code', 'title', 'description', 'sizes', 'colors', 'price', 'prev_price', 'stock', 'featured', 'status'];

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    
}
