<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Season;
class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'content',
        'season',
        'cost'
    ];

    protected $guarded = [];

    protected $casts = [
        'season' => Season::class,
    ];

    public function placeImages()
    {
        return $this->hasMany(PlaceImage::class);
    }

    public function userPlaceFavourites()
    {
        return $this->hasMany(UserPlaceFavourite::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
