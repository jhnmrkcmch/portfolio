<?php

namespace App\Http\Controllers;

use Illuminate\Http;
use App\Models\CarouselImage;
use Illuminate\Support\Facades\DB;
use App\Models\Section;

class HomeController extends Controller
{
    public function index()
    {
        $data = []; // your other data
        $images = CarouselImage::all(); // your carousel images
    
        // Insert default hero content (only if empty)
        if (Section::where('page', 'home')->count() == 0) {
            DB::table('sections')->insert([
                [
                    'page' => 'home',
                    'section' => 'hero',
                    'key' => 'title',
                    'content' => 'Lighthouse Christian Community',
                    'image' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'page' => 'home',
                    'section' => 'hero',
                    'key' => 'subtitle',
                    'content' => 'Las Piñas, Muntinlupa City',
                    'image' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }
    
        // FETCH sections from DB
        $sections = Section::where('page', 'home')->get();
    
        return view('home', compact('data', 'images', 'sections'));
    }
}
