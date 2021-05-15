<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $timestamp = false;
    protected $fillable = [
        'name', 'address',
    ];
}
