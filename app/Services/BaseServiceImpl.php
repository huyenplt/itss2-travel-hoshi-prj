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

    public function paginate(int $numberPage)
    {
        return $this->all()->toQuery()->paginate($numberPage);
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

    public function all()
    {
        return $this->model->all();
    }


    /**
     * @param Model $model
     * @param array $data
     * @return bool|mixed
     */
    public function update($model, array $data)
    {
        return $model->update($data);
    }

    public function delete(int $id): bool
    {
        $model = $this->model->find($id);

        if (!$model) {
            return false;
        }

        return $model->delete();
    }
}
