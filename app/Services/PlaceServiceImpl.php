<?php

namespace App\Services;

use App\Models\Place;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\PlaceService;

class PlaceServiceImpl extends BaseServiceImpl implements PlaceService
{
    public function __construct(Place $place)
    {
        $this->model = $place;
    }
}
