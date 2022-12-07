<?php

namespace App\Services\Interfaces;

use App\Services\Interfaces\BaseService;

interface PlaceService extends BaseService
{
    public function getAddressPlace();
    public function getPlaceByAddressName (string $addressName);
    public function all();
}
