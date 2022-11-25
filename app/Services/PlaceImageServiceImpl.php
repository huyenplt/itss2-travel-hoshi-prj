<?php

namespace App\Services;

use App\Models\PlaceImage;
use App\Services\BaseServiceImpl;
use App\Services\Interfaces\PlaceImageService;

class PlaceImageServiceImpl extends BaseServiceImpl implements PlaceImageService
{
    public function create(array $data) : PlaceImage
    {
        return PlaceImage::create($data);
    }

    public function update(PlaceImage $placeImage, array $data) : bool
    {
        return $placeImage->update($data);
    }

    public function remove(array $ids = []) : bool
    {
        return PlaceImage::whereIn('id', $ids)->delete();
    }
}
