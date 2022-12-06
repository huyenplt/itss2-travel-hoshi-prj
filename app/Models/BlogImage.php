<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'file_path'
    ];

    protected $guarded = [];

    protected $casts = [];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
