<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class educationController extends Controller
{
    // Education
    public function education()
    {
        return view('education.littlewonders');
    }
    public function saltlight()
    {
        return view('education.saltlight');
    }
    public function schoolofministry()
    {
        return view('education.schoolofministry');
    }
}
