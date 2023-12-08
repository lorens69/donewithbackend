<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uusers extends Model
{
    protected $table = 'uuser';

    protected $fillable = [
        'name',
        'email',
        'contact',
        'current_address',
        'password',
    ];
}
