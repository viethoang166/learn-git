<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index');
    }
}
