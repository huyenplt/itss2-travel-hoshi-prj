<?php

namespace App\Services;

use App\Models\BlogImage;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\BlogImageService;

class BlogImageServiceImpl extends BaseServiceImpl implements BlogImageService
{
    public function create(array $data) : BlogImage
    {
        return BlogImage::create($data);
    }

    public function update(BlogImage $blogImage, array $data) : bool
    {
        return $blogImage->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return BlogImage::whereIn('id', $ids)->delete();
    }
}
