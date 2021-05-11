<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['url', 'type', 'videoable_id', 'videoable_type'];

    public function videoable()
    {
        return $this->morphTo();
    }
}
