<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_type_image extends Model
{
    use HasFactory;

    public function roomType(): HasMany
    {
        return $this->hasMany(Room_type::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
