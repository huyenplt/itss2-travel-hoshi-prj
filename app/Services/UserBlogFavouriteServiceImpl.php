<?php

namespace App\Services;

use App\Models\UserBlogFavourite;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserBlogFavouriteService;

class UserBlogFavouriteServiceImpl extends BaseServiceImpl implements UserBlogFavouriteService
{
    public function create(array $data) : UserBlogFavourite
    {
        return UserBlogFavourite::create($data);
    }

    public function update(UserBlogFavourite $userBlogFavourite, array $data) : bool
    {
        return $userBlogFavourite->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return UserBlogFavourite::whereIn('id', $ids)->delete();
    }
}
