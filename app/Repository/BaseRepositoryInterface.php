<?php

namespace App\Repository;

interface BaseRepositoryInterface
{
    public function paginate(array $input = [], $perPage = 5);

    public function save(array $inputs, array $conditions = []);

    public function findById($id);

    public function deleteById($id);
}
