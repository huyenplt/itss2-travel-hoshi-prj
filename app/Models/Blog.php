<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Season;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'place_id',
        'title',
        'content',
        'season',
        'price',
        'total_votes'
    ];

    protected $guarded = [];

    protected $casts = [
        'season' => Season::class,
    ];

    public function blogImages()
    {
        return $this->hasMany(BlogImage::class);
    }

    public function userBlogFavourites()
    {
        return $this->hasMany(UserBlogFavourite::class);
    }

    public function userBlogVotes()
    {
        return $this->hasMany(UserBlogVote::class);
    }

    public function userBlogComments()
    {
        return $this->hasMany(UserBlogComment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
