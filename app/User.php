<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable =['email', 'password'];

    protected $hidden = ['password','remember_token'];

    public function orders(){
       return $this->hasMany('App\Order');
    }
}
