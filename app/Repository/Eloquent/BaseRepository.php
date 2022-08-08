<?php

namespace App\Repository\Eloquent;

use App\Repository\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function paginate(array $input = [], $perPage = 5)
    {
        $query = $this->model->query();
        return $query->paginate($perPage);
    }

    public function save(array $inputs, array $conditions = ['id' => null])
    {
        return $this->model->upadteOrCreate($conditions, $inputs);
    }
}
