<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserReservation extends Model
{
    protected $table = 'user_reservation';

    protected $fillable = [
        'user_id',
        'contact',
        'current_address',
        'model',
        'yom',
        'service_name',
        'status',
        'date',
        'special_instructions',
    ];
}
