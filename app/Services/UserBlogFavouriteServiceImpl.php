<?php

namespace App\Services;

use App\Models\UserBlogFavourite;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserBlogFavouriteService;

class UserBlogFavouriteServiceImpl extends BaseServiceImpl implements UserBlogFavouriteService
{
    public function __construct(UserBlogFavourite $userBlogFavourite)
    {
        $this->model = $userBlogFavourite;
    }
}
