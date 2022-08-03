<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        if (Auth::user()) {
            return '/admin';
        }
        return '/home';
    }

    public function login(Request $request)
    {
        $login = [
            'email' => $request,
            'password' => $request,
        ];
        //dd(Auth::attempt($login));
        if (Auth::attempt($login)) {
            return redirect($this->redirectPath());
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

}
