<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImage;

class CarouselController extends Controller
{
    public function index()
    {
        $images = CarouselImage::all();
        return view('adminPages.carousel', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'caption' => 'nullable|string|max:255'
        ]);

        $path = $request->file('image')->store('carousel', 'public');

        CarouselImage::create([
            'image_path' => $path,
            'caption' => $request->caption
        ]);

        return back()->with('success', 'Image uploaded!');
    }

    public function update(Request $request, $id)
    {
        $image = CarouselImage::findOrFail($id);

        $image->update([
            'caption' => $request->caption
        ]);

        return back()->with('success', 'Caption updated!');
    }

    public function delete($id)
    {
        $image = CarouselImage::findOrFail($id);
        $image->delete();

        return back()->with('success', 'Image deleted!');
    }
}