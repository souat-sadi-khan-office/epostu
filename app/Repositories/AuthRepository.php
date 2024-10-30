<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Interface\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface
{
    public function login($request, $guard)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard($guard)->attempt($credentials)) {
            return $guard;
        }

        return 0;
    }

    public function form()
    {
        return view('admin.auth.login');
    }

    public function logout($guard)
    {
        Auth::guard($guard)->logout();
    }
}