<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'fakultas' => 'required|string|max:255',
        ]);

        Pendaftaran::create($data);

        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
}
