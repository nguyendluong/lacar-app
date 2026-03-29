<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'model',
        'year',
        'license_plate',
        'image',
        'battery_percent',
        'range_km',
        'price_per_hour',
        'price_per_day',
        'price_per_week',
        'status',
    ];

    /**
     * Get the bookings for the car.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
