<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [];

    public function blog()
    {
        return $this->belongsTo(Place::class);
    }
}
