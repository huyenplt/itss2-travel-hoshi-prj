<?php

namespace App\Services\Interfaces;

use App\Models\UserPlaceFavourite;

interface UserPlaceFavouriteService
{
    public function create(array $data) : UserPlaceFavourite;
    public function update(UserPlaceFavourite $userPlaceFavourite, array $data) : bool;
    public function remove(array $ids = []) : bool;
}
