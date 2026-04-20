<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newhereController extends Controller
{
    public function newhere()
    {
        return view('newhere.becomeamember');
    }
    public function planavisit()
    {
        return view('newhere.planavisit');
    }
    public function culture()
    {
        return view('newhere.culture');
    }
}
