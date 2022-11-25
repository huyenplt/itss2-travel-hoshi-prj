<?php

namespace App\Services\Interfaces;

use App\Models\BlogImage;

interface BlogImageService
{
    public function create(array $data) : BlogImage;
    public function update(BlogImage $blogImage, array $data) : bool;
    public function remove(array $ids = []) : bool;
}
