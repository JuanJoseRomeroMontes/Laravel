<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function roomTypesImages(): BelongsTo
    {
        return $this->belongsTo(Room_type_image::class);
    }
}
