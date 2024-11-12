<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $fillable = [
        'brand',
        'model',
        'type',
        'year',
        'license_plate',
        'engine_capacity',
        'fuel_type',
        'seat_capacity',
        'status',
        'price_per_day',
        'description',
        'picture',
    ];
}
