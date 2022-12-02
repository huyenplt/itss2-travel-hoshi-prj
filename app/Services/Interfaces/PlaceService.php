<?php

namespace App\Services\Interfaces;

interface PlaceService extends BaseService
{
    public function getAddressPlace();
    public function getPlaceByAddressName (string $addressName);
}
