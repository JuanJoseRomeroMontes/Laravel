<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ["name", "checkInDate", "checkOutDate", "specialRequest", "roomId", "orderDate"];

    public $timestamps = false;

    public function room(): BelongsTo
    {
        return $this->hasOne(Room::class);
    }
}
