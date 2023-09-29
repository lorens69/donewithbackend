<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestForms extends Model
{
    protected $table = 'RequestForm';

    protected $fillable = [
        'name',
        'contact',
        'email',
        'current_address',
        'model',
        'yom',
        'service',
        'date',
        'specialrequest',
    ];
}
