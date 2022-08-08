<?php

namespace App\Repository\Eloquent;

use App\Models\PermissionGroup;
use App\Repository\PermissionGroupRepositoryInterface;

class permissionGroupRepository extends BaseRepository implements PermissionGroupRepositoryInterface
{
    public function __construct(PermissionGroup $model)
    {
        $this->model = $model;
    }
}
