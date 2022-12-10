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

    public function getAddressPlace($query = null)
    {
        $addresses = $this->model
            ->select('address')
            ->groupBy('address');

        if (!is_null($query)) {
            $addresses = $addresses->where('address', 'like', '%' . $query . '%');
        }

        return $addresses;
    }

    public function getPlaceByAddressName (string $addressName) {
        $places = $this->model->where('address', 'like', '%' . $addressName . '%')->get();

        return $places;
    }

    public function all() {
        $query = Place::query();
        return $query->paginate(10);
    }
}
