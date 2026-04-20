<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ministriesController extends Controller
{
    public function ministries()
    {
        return view('ministries.viewall');
    }
    public function children()
    {
        return view('ministries.children');
    }
    public function youngadults()
    {
        return view('ministries.youngadults');
    }
    public function mensministry()
    {
        return view('ministries.mensministry');
    }
    public function womensministry()
    {
        return view('ministries.womensministry');
    }
    public function smallgroups()
    {
        return view('ministries.smallgroups');
    }
    public function youth()
    {
        return view('ministries.youth');
    }
}
