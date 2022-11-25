<?php

namespace App\Services;

use App\Models\Blog;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\BlogService;

class BlogServiceImpl extends BaseServiceImpl implements BlogService
{
    public function create(array $data) : Blog
    {
        return Blog::create($data);
    }

    public function update(Blog $blog, array $data) : bool
    {
        return $blog->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return Blog::whereIn('id', $ids)->delete();
    }
}
