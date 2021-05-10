<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
	protected $guard = 'customer';
    protected $fillable = ['name', 'email', 'password'];

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
