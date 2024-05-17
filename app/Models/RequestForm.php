<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;
    protected $table = 'requestforms';

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

