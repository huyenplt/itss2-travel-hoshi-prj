<?php

namespace App\Services;

use App\Models\UserPlaceFavourite;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\UserPlaceFavouriteService;

class UserPlaceFavouriteServiceImpl extends BaseServiceImpl implements UserPlaceFavouriteService
{
    public function __construct(UserPlaceFavourite $userPlaceFavourite)
    {
        $this->model = $userPlaceFavourite;
    }
}
