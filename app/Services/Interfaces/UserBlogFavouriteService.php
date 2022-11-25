<?php

namespace App\Services\Interfaces;

use App\Models\UserBlogFavourite;

interface UserBlogFavouriteService
{
    public function create(array $data) : UserBlogFavourite;
    public function update(UserBlogFavourite $userBlogFavourite, array $data) : bool;
    public function remove(array $ids = []) : bool;
}
