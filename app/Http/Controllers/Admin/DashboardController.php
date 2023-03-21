<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.home');
    }
}
