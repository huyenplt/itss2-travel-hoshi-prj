<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [];

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
}
