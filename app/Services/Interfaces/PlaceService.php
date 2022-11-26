<?php

namespace App\Services\Interfaces;

use App\Models\Place;

interface PlaceService
{
    public function create(array $data) : Place;
    public function update(Place $place, array $data) : bool;
    public function remove(string $id) : bool;
}
