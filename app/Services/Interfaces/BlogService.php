<?php

namespace App\Services\Interfaces;

use App\Models\Blog;

interface BlogService
{
    public function create(array $data) : Blog;
    public function update(Blog $blog, array $data) : bool;
    public function remove(array $ids = []) : bool;
}
