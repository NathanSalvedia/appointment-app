<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RequestForm extends Model
{
    use HasFactory;

   public function requestforms(): HasMany
   {
    return $this->hasMany(requestform::class);
   }

    protected $table = 'requestforms';

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'phonenumber',
        'typesofrequirements',
        'image',
        'purpose',
        'status'
    ];
}

