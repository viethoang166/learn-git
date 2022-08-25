<?php

namespace App\Repository\Admin\Customer;

use App\Models\Customer;
use App\Repository\Admin\Customer\CustomerRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    public function __construct(Customer $model)
    {
        $this->model = $model;
    }
}
