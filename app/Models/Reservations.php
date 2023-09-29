<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{

    protected $fillable = [
        'name',
        'contact',
        'email',
        'address',
        'model',
        'yom',
        'service',
        'date',
        'specialrequest',
    ];

}
