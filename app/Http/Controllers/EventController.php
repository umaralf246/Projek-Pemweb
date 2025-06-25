<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class EventController extends Controller
{
    // Tampilkan halaman daftar event
    public function dashboard()
    {
        $events = Event::orderBy('event_time', 'asc')->get(); 
        return view('dashboard', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('daftar', compact('event'));
    }

    // Proses pendaftaran user ke event
    public function register(Request $request, $id)
{
    // Validasi form
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'reason' => 'required',
    ]);

    $userId = Auth::id();
    $alreadyRegistered = \App\Models\Registration::where('event_id', $id)
        ->where('user_id', $userId)
        ->exists();

    if ($alreadyRegistered) {
        return redirect()->back()->with('error', 'Kamu sudah mendaftar event ini.');
    }
    // Buat data pendaftaran
        Registration::create([
        'event_id' => $id,
        'user_id' => Auth::id(),
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'reason' => $request->reason,
    ]);


    return redirect()->route('jadwal')->with('success', 'Berhasil mendaftar event!');
}
}
