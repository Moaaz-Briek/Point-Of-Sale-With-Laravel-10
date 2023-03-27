<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (auth()->guard('admin')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect()->route('admin.dashboard');
        }
        return back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.home');
    }
}
