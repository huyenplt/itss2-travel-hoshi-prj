<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [];

    public function placeImages()
    {
        return $this->hasMany(PlaceImage::class);
    }

    public function userPlaceFavourites()
    {
        return $this->hasMany(UserPlaceFavourite::class);
    }
}
