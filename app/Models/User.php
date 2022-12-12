<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => Role::class,
    ];

    const ROLE_USER = 0;
    const ROLE_ADMIN = 1;

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function userPlaceFavourites()
    {
        return $this->hasMany(UserPlaceFavourite::class);
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

    public function isRole($role)
    {
        return $this->role->name == $role;
    }

    public function liked(Place $place)
    {
        return $this->userPlaceFavourites()->where('place_id', '=', $place->id)->first();
    }
}
