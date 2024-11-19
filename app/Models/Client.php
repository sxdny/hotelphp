<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'phone_number',
        'email',
        'username',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
