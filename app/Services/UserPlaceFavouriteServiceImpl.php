<?php

namespace App\Services;

use App\Models\UserPlaceFavourite;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserPlaceFavouriteService;

class UserPlaceFavouriteServiceImpl extends BaseServiceImpl implements UserPlaceFavouriteService
{
    public function create(array $data) : UserPlaceFavourite
    {
        return UserPlaceFavourite::create($data);
    }

    public function update(UserPlaceFavourite $userPlaceFavourite, array $data) : bool
    {
        return $userPlaceFavourite->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return UserPlaceFavourite::whereIn('id', $ids)->delete();
    }
}
