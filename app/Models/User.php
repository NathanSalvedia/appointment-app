<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'phonenumber', 'username', 'email', 'password', 'profile_picture', 'security_question',
        'security_answer', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}