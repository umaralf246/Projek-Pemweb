<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // Menampilkan form tambah event
    public function form()
    {
        return view('tambah-event');
    }

    // Menyimpan data event
    public function simpan(Request $request)
    {
        $request->validate([
            'poster' => 'nullable|image|max:20480', // max 20MB
            'nama_event' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'waktu_acara' => 'required|date',
            'lokasi_acara' => 'required|string',
            'jumlah_peserta' => 'required|integer',
            'waktu_pendaftaran' => 'required|date',
            'link_grup' => 'required|url'
        ]);

        // Simpan poster jika diupload
        $poster_path = null;
        if ($request->hasFile('poster')) {
            $poster_path = $request->file('poster')->store('posters', 'public');
        }

        // Simpan ke database (kalau pakai model Event), atau sementara tampilkan data saja
        // Untuk demo, kita kembalikan view dengan data input
        return view('berhasil-daftar', [
            'nama_event' => $request->nama_event,
            'link_grup' => $request->link_grup,
        ]);
    }
}


