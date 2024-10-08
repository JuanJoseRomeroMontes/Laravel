<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsToMany;

class Amenity extends Model
{
    use HasFactory;

    public function roomAmenity(): BelongsToMany
    {
        return $this->belongsToMany(Room::class);
    }
}
