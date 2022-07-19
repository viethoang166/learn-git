<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\UserRequest;
use App\Http\Service\UserService;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->UserService = $userService;
    }


    public function index()
    {
        return view('admin.user.index',['users'=> Session::get('users')]);

    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function store(UserRequest $request)
    {
        $this -> userService-> create($request -> all());

        return redirect() -> back();
    }
}
