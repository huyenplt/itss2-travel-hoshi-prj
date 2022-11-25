<?php

namespace App\Services\Interfaces;

use App\Models\PlaceImage;

interface PlaceImageService
{
    public function create(array $data) : PlaceImage;
    public function update(PlaceImage $placeImage, array $data) : bool;
    public function remove(array $ids = []) : bool;
}
