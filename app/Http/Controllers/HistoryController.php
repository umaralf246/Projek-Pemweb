<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Registration;

class HistoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $registrations = Registration::with('event')
            ->where('user_id', $user->id)
            ->whereHas('event', function ($query) {
                $query->where('event_time', '<=', now()); // hanya event yang sudah lewat
            })
            ->get();

        return view('history', ['registrations' => $registrations]);
    }
}

