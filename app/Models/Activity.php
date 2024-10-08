<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ["type", "date", "notes", "user_id"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
