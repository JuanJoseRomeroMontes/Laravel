<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function roomAmenities(): HasMany
    {
        return $this->hasMany(Room_amenity::class);
    }

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function roomType(): HasMany
    {
        return $this->hasMany(Room_type::class);
    }
}
