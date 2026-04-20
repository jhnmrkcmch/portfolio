<?php

namespace App\Http\Controllers;

use Illuminate\Http;

class AdminController extends Controller
{
    public function admin()
    {
        return view('adminPages.users');
    }
}
