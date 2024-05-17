<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestFormX extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'phonenumber',
        'typesofrequirements',
        'image',
        'purpose',
    ];

}
