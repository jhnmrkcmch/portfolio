<?php

namespace App\Http\Controllers;

class BackgroundController extends Controller
{
    // Education
    public function education()
    {
        return view('background.education');
    }
    public function certificates()
    {
        return view('background.certificates');
    }
    public function internships()
    {
        return view('background.internships');
    }
}
