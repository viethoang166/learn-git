<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Http\Service\UserService;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        #dd(Session::all());
        return view('admin.user.index',['users'=> Session::get('users')]);
    }
    public function add()
    {
        #dd(Session::get('users'));
        return view('admin.user.add');
    }

    public function store(UserRequest $request)
    {
        #dd($request);
        $this->userService->add($request->only('name', 'email', 'phone', 'address'));

        return redirect()->back()->with('message', 'thêm mới thành công');
        #$users = collect(Session::get('users'));
    }


}
