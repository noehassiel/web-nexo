<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'location',
        'birthdate'
    ];
}
