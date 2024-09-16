<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Room_types extends Model
{
    use HasFactory;

    protected $fillable = ["typeName"];

    public function room(): HasMany
    {
        return $this->belongsTo(Room::class);
    }
}
