<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    public function dashboard()
    {
    $events = Event::orderBy('event_date', 'asc')->get();
    return view('dashboard', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('daftar', compact('event'));
    }
}
