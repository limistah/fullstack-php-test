<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
    //
    protected $fillable = ['name', 'email', 'password']; 
    protected $guarded = ['password']; 
}
