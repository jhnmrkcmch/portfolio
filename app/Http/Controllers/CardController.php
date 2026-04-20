<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;


class CardController extends Controller
{
    public function index()
    {
        return response()->json(Card::all());
    }
    public function apiStore(Request $request)
    {
        $card = Card::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()->json($card);
    }
    public function apiDelete($id)
    {
        Card::findOrFail($id)->delete();
    
        return response()->json(['success' => true]);
    }

    public function editor($type)
    {
        $cardsByType = Card::whereIn('type', ['elders', 'leaders'])->get()
        ->groupBy('type');

        return view('adminPages.cards', compact('cardsByType'));
    }
    public function teamPage()
    {
        $cards = Card::all();
        return view('about.team', compact('cards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);
    
        $card = new Card();
        $card->title = $request->title;
        $card->description = $request->description;
        $card->type = $request->type;
    
        if ($request->hasFile('image')) {
            $filename = time().'_'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('cards', $filename, 'public');
    
            $card->image = $path; // use "image" column in DB
        }
    
        $card->save();
    
        return back()->with('success', 'Image Added!');;
    }

    public function update(Request $request)
    {
        $card = Card::findOrFail($request->card_id);
    
        // 🔥 FIX: create if null
        if (!$card) {
            $card = new Card();
        }
    
        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);
    
        // IMAGE
        if ($request->hasFile('image')) {
            $filename = time().'_'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('cards', $filename, 'public');
    
            $card->image = $path;
        }
        
    
        $card->title = $request->title;
        $card->description = $request->description;

        $card->save();
    
        
    
        return back()->with('success', 'Card updated successfully!');
    }
    public function delete($id)
    {
        $card = Card::findOrFail($id);
        $card->delete();

        return back()->with('success', 'Image deleted!');
    }

}
