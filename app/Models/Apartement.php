<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'floor', 'room_number', 'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
