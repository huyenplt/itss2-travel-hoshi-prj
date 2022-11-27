<?php

namespace App\Services;

use App\Services\Interfaces\BaseService;
use Illuminate\Database\Eloquent\Model;

class BaseServiceImpl implements BaseService
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param Model $model
     * @param array $data
     * @return bool|mixed
     */
    public function update(array $data)
    {
        return $this->model->update($data);
    }

    public function delete(int $id): bool
    {
        $model = $this->find($id);

        return $model->delete();
    }
}
