<?php

namespace App\Http\Controllers;

use Illuminate\Http;

class aboutController extends Controller
{
    public function about()
    {
        return view('about.about');
    }
}
