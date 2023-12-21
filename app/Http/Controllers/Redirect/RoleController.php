<?php

namespace App\Http\Controllers\Redirect;

use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function user()
    {
        return view('home.index');
    }
}
