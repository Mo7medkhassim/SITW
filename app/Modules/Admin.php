<?php

namespace App\Modules;

use App\Http\Middleware\Authenticate as MiddlewareAuthenticate;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';


    protected $filable = [
        'name', 'email','type', 'password', 'created_at', 'updated_at',
    ];

    protected $hidden = [
       'password', 'created_at', 'updated_at','remmber_token'
    ];
}
