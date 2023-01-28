<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Jenssegers\Mongodb\Auth\User as Authenticatable;
// use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
// use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Eloquent implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword; 
    protected $connection = 'mongodb';
    protected $table  = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    // public function getAuthPassword()
    // {
    //     return $this->password;
    // }
    
}

