<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserEventController extends Controller
{
    public function dashboard()
    {
        $events = Event::orderBy('event_date', 'asc')->get()->map(function ($event) {
            $event->is_past = Carbon::parse($event->event_time)->isPast();
            return $event;
        });

        return view('dashboard', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        if (Carbon::parse($event->event_time)->isPast()) {
            return redirect()->route('dashboard')->with('error', 'Event ini sudah berakhir.');
        }

        return view('daftar', compact('event'));
    }
}
