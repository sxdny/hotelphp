<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'capacity',
        'image_url',
        'state',
        'price',
    ];

    // protected $hidden = [
    //     'name'
    // ];
}
