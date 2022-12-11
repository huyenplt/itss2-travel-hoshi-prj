<?php

namespace App\Services\Interfaces;

use App\Services\Interfaces\BaseService;

interface PlaceService extends BaseService
{
    public function getAddressPlace($query = null);
    public function getPlaceByAddressName (string $addressName);
    public function search($data = []);
    public function getPlaceByname ($place);
}
