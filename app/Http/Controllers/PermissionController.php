<?php

namespace App\Http\Controllers;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permission.index');
    }
}
