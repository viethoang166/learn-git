<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\UserRequest;
use App\Http\Service\MailService;
use App\Http\Service\UserService;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $userService;
    protected $mailService;

    public function __construct(UserService $userService, MailService $mailService)
    {
        $this->userService = $userService;
        $this->mailService = $mailService;
    }

    public function index()
    {
        #dd(Session::get('users'));
        return view('admin.user.index',['users'=> Session::get('users')]);
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function email()
    {
        return view('admin.user.email', ['users' => Session::get('users')]);
    }

    public function store(UserRequest $request)
    {
        $this->userService->add($request->only('name', 'email', 'phone', 'address'));
        return redirect()->back()->with('message', 'thêm mới thành công');
        #$users = collect(Session::get('users'));
    }

}
