<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsToMany;

class Image extends Model
{
    protected $table = 'images';
    use HasFactory;

    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'room_types_images', 'room_type_id', 'image_id');
    }
}
