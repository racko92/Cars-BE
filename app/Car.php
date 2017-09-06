<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'mark',
        'model',
        'year',
        'maxSpeed',
        'isAutomati',
        'engine',
        'numberOfDoors'
    ];
}
