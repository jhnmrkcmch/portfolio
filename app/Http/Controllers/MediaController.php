<?php

namespace App\Http\Controllers;

use Illuminate\Http;

class mediaController extends Controller
{

    public function media()
    {
        return view('media.media');
    }
    public function audiopodcasts()
    {
        return view('media.audiopodcasts');
    }
    public function prevmessages()
    {
        return view('media.prevmessages');
    }
    public function watchlive()
    {
        return view('media.watchlive');
    }
    public function sermonblogs()
    {

        $cards = [
            [
                'title' => 'It’s Always been His Call',
                'description' => 'The true meaning of calling in the Christian faith is often misunderstood and deserves
                            careful exploration. Many mistakenly believe that…',
                'image' => 'media-img-1.jpg'
            ],
            [
                'title' => 'Defining Favor',
                'description' => 'In the journey of faith, understanding the “Favor of the Lord” is essential to living
                                a fulfilling life. This blog explores the…',
                'image' => 'media-img-2.jpg'
            ],
            [
                'title' => 'The Purpose of Favor',
                'description' => 'In our journey of faith, recognizing and understanding the “Favor of the Lord” is
                            crucial for living not only a fulfilling life…',
                'image' => 'media-img-3.jpg'
            ],
            
        ];

        return view('media.sermonblogs', compact('cards'));
    }
}
