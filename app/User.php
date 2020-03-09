<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;


    protected $fillable = [
        'fname', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

 

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function classEvents()
    {
        return $this->hasMany('App\class_events');
    }

    public function accounts()
    {
        return $this->hasOne('App\Account');
    }
     public function respond()
    {
        # code...
    return $this->hasMany('App\Respond');
    }
}
