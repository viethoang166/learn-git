<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PermissionGroup\PermissionGroupRequest;
use App\Repositories\Admin\PermissionGroup\PermissionGroupRepository;
use App\Repository\PermissionGroupRepositoryInterface;

class PermissionGroupController extends Controller
{
    protected $permissionGroupRepository;

    public function __construct(PermissionGroupRepositoryInterface $permissionGroupRepository)
    {
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    public function index(){
        return view('admin.permission_group.index', [
            'permissionGroups' => $this->permissionGroupRepository->paginate()
        ]);
    }
}
