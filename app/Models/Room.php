<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    use HasFactory;

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function room_type(): HasMany
    {
        return $this->hasMany(Room_types::class, 'id');
    }

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'room_types_images', 'room_type_id', 'image_id');
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Room_amenity::class);
    }
}
