<?php

namespace App\Services;

use App\Models\Place;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\PlaceService;

class PlaceServiceImpl extends BaseServiceImpl implements PlaceService
{
    public function create(array $data) : Place
    {
        return Place::create($data);
    }

    public function update(Place $place, array $data) : bool
    {
        return $place->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return Place::whereIn('id', $ids)->delete();
    }
}
