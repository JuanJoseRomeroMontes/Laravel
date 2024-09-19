<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Booking;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'smallint';

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function room_type(): HasMany
    {
        return $this->hasMany(Room_types::class, 'id', 'roomType');
    }

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'room_types_images', 'room_type_id', 'image_id', 'roomType', 'id');
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'rooms_amenities', 'roomId', 'amenityid', 'id', 'id');
    }

    public static function getAvailableRooms($request)
    {
        $validatedData = $request->validate([
            'checkIn' => 'required|date',
            'checkOut' => 'required|date|after:checkIn',
        ]);

        $bookings = Booking::whereBetween('checkInDate', [$validatedData['checkIn'], $validatedData['checkOut']])
                       ->orWhereBetween('checkOutDate', [$validatedData['checkIn'], $validatedData['checkOut']])
                       ->get();

        // Obtener habitaciones asociadas a las reservas
        $roomIds = $bookings->pluck('roomId')->unique();
        return self::whereNotIn('id', $roomIds)->get();
    }
}