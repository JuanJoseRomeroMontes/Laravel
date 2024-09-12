<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    use HasFactory;

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function roomType(): HasOne
    {
        return $this->hasOne(Room_type::class);
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
