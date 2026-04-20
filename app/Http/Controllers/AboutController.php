<?php

namespace App\Http\Controllers;

use Illuminate\Http;
use App\Models\Card;


class aboutController extends Controller
{
    public function about()
    {
        return view('about.about');
    }
    public function location()
    {
        return view('about.location');
    }
    public function vision()
    {
        return view('about.vision');
    }
    public function beliefs()
    {
        return view('about.beliefs');
    }
    public function pastors()
    {
        return view('about.pastors');
    }
    public function team()
    {
        $elders = Card::where('type', 'elders')->get();
        $leaders = Card::where('type', 'leaders')->get();
        
        return view('about.team', compact('elders', 'leaders'));

    }
    public function contact()
    {
        return view('about.contact');
    }
}
