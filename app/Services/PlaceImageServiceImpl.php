<?php

namespace App\Services;

use App\Models\PlaceImage;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\PlaceImageService;

class PlaceImageServiceImpl extends BaseServiceImpl implements PlaceImageService
{
    public function __construct(PlaceImage $placeImage)
    {
        $this->model = $placeImage;
    }
}
