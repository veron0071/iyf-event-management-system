<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

        'npp',

        'name',

        'employee_type',

        'email',

        'phone',

        'birth_date',

    ];
}
