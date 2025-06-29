<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Registration;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Tampilkan form feedback berdasarkan registration.
     */
    public function show(Registration $registration)
    {
        // Jika feedback sudah ada, redirect ke history
        if ($registration->feedback) {
            return redirect()->route('history')->with('info', 'Kamu sudah memberikan feedback sebelumnya.');
        }

        return view('feedback', compact('registration'));
    }

    /**
     * Simpan feedback ke tabel feedback.
     */
    public function store(Request $request, Registration $registration)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'feedback' => 'required|string|max:1000',
        ]);

        // Simpan ke tabel feedback
        Feedback::create([
            'registration_id' => $registration->id,
            'name' => $validated['name'],
            'feedback' => $validated['feedback'],
        ]);

        // Kembali ke history dengan modal
        return redirect()->route('history')->with('showModal', true);
    }
}
