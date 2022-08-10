<?php

namespace App\Http\Controllers;

use App\Repository\PermissionGroupRepositoryInterface;
use  App\Http\Requests\Admin\PermissionGroupRequest;

class PermissionGroupController extends Controller
{
    protected $permissionGroupRepository;

    public function __construct(PermissionGroupRepositoryInterface $permissionGroupRepository)
    {
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    public function index()
    {
        return view('admin.permission_group.index', [
            'permissionGroups' => $this->permissionGroupRepository->paginate()
        ]);
    }

    public function create()
    {
        return view('admin.permission_group.form');
    }

    public function store(PermissionGroupRequest $request)
    {
        $this->permissionGroupRepository->save($request->all());
        return redirect()->route('permission_group.index')->with('success', 'Tạo mới thành công!');
    }

    public function show($id)
    {
        if (!$permissionGroup = $this->permissionGroupRepository->findById($id)) {
            abort(404);
        }

        return view('admin.permission_group.show', ['permissionGroup' => $permissionGroup]);
    }

    public function edit($id)
    {
        if (!$permissionGroup = $this->permissionGroupRepository->findById($id)) {
            abort(404);
        }
        return view('admin.permission_group.form', ['permissionGroup' => $permissionGroup]);
    }

    public function update(PermissionGroupRequest $request, $id)
    {
        $this->permissionGroupRepository->save($request->all(), ['id' => $id]);
        return redirect()->route('permission_group.index')->with('success', 'Sửa thành công!');
    }

    public function destroy($id)
    {
        $this->permissionGroupRepository->deleteById($id);
        return redirect()->route('permission_group.index')->with('success', 'Xoá thành công!');
    }
}
