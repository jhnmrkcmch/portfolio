<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminLayoutController extends Controller
{   
    public function adminLayout()
    {
        return view('layouts.adminLayout');
    }
    
}
