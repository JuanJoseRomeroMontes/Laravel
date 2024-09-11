<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function room(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function roomType(): HasMany
    {
        return $this->hasMany(Room_type::class);
    }
}
