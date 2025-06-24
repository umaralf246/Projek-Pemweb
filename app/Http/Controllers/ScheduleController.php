<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;

class ScheduleController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Ambil semua event yang BELUM LEWAT
        $registrations = Registration::with('event')
            ->where('user_id', $user->id)
            ->whereHas('event', function ($query) {
                $query->where('event_time', '>', now());
            })
            ->get();

        return view('jadwal', ['events' => $registrations->pluck('event')]);
    }
}
    