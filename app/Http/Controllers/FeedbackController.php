<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function show(Registration $registration)
    {
        return view('feedback', compact('registration'));
    }

    public function store(Request $request, Registration $registration)
    {
        $validated = $request->validate([
            'feedback' => 'required|string|max:1000',
        ]);

        $registration->feedback = $validated['feedback'];
        $registration->save();

        return redirect()->route('history')->with('success', 'Terima kasih atas masukan Anda!');
    }
}
