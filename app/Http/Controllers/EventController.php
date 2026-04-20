<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->month ?? now()->month;
        $year  = $request->year ?? now()->year;
    
        $start = Carbon::create($year, $month, 1)->startOfMonth();
        $end   = Carbon::create($year, $month, 1)->endOfMonth();
    
        $query = Event::whereBetween('event_date', [$start, $end]);
    
        // Category filter
        if ($request->category && $request->category !== 'All Categories') {
            $query->where('category', $request->category);
        }
    
        $events = $query->orderBy('event_date')->get()->groupBy('event_date');

        if ($request->date) {
            $query->whereDate('event_date', $request->date);
        }
    
        return view('events', compact('events', 'month', 'year'));
    }
    public function getByDate(Request $request)
    {
        $date = $request->date;

        $events = Event::whereDate('event_date', $date)->get();

        return response()->json($events);
    }
    public function getEvents(Request $request)
    {
        $month = $request->month ?? now()->month;
        $year  = $request->year ?? now()->year;
    
        $start = Carbon::create($year, $month, 1)->startOfMonth();
        $end   = Carbon::create($year, $month, 1)->endOfMonth();
    
        $query = Event::whereBetween('event_date', [$start, $end]);
    
        if ($request->category && $request->category !== 'All Categories') {
            $query->where('category', $request->category);
        }
    
        if ($request->date) {
            $query->whereDate('event_date', $request->date);
        }
    
        return response()->json([
            'events' => $query->get(),
            'month' => Carbon::create($year, $month, 1)->format('F Y')
        ]);
    }
}   
