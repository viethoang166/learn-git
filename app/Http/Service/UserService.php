<?php

namespace App\Http\Service;
use \Illuminate\Support\Facades\Session;

class UserService
{
    public function add(array $inputs)
    {
        Session::push('users', $inputs);
    }
}
