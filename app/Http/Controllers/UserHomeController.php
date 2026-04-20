<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userHomeController extends Controller
{
    public function userHome()
    {
        $user = auth()->user(); 
        return view('user.userHome', compact('user'));

    }
}
