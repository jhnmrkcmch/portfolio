<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImage;





class SectionController extends Controller
{
    public function index()
    {
        // Get all sections for home page
        $images = CarouselImage::all();

        return view('adminPages.content', compact('images'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
    
        if ($request->hasFile('images')) {
    
            foreach ($request->file('images') as $image) {
    
                $filename = time().'_'.$image->getClientOriginalName();
    
                $path = $image->storeAs('carousel', $filename, 'public');
    
                CarouselImage::create([
                    'image_path' => $path
                ]);
            }
        }
    
        return back()->with('success', 'Images uploaded successfully!');
    }

    public function update(Request $request)
    {

    }
        
    public function delete($id)
    {
        $image = CarouselImage::findOrFail($id);
        $image->delete();

        return back()->with('success', 'Image deleted!');
    }
}