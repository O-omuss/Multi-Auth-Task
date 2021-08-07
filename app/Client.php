<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    
    protected $primaryKey = 'client_id';

    protected $guard = 'client';

    protected $fillable = [
        'name', 'email', 'password', 'number', 'dob', 'address', 'profile_image', 'gender', 'active_on_social', 'currently', 'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}





