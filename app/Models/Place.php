<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'is_favorite',
    ];

    public function user_places(): BelongsToMany
    {
        return $this->belongsToMany(UserPlace::class, 'user_places');
    }
}
