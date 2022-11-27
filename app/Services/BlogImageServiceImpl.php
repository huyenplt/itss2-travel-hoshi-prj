<?php

namespace App\Services;

use App\Models\BlogImage;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\BlogImageService;

class BlogImageServiceImpl extends BaseServiceImpl implements BlogImageService
{
    public function __construct(BlogImage $blogImage)
    {
        $this->model = $blogImage;
    }
}
