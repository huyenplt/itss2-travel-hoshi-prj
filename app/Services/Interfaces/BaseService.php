<?php

namespace App\Services\Interfaces;

interface BaseService
{
    public function paginate(int $numberPage);
    public function create(array $data);
    public function find($id);
    public function all();
    public function update( $model, array $data);
    public function delete(int $id): bool;
}
