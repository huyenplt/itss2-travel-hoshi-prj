<?php

namespace App\Services\Interfaces;

interface PlaceService
{
    public function getAddressPlace();
    public function getPlaceByAddressName (string $addressName);
}
