<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $events = [
            [
                'id' => 1,
                'judul' => 'Seminar AI dan Teknologi',
                'deskripsi' => 'Belajar bersama pakar AI dari luar negeri.',
                'waktu' => 'Sabtu, 22 Juni 2025 - 09:00 WIB',
                'gambar' => 'https://source.unsplash.com/600x300/?ai,technology'
            ],
            [
                'id' => 2,
                'judul' => 'Workshop UI/UX Design',
                'deskripsi' => 'Pelatihan desain interaktif menggunakan Figma dan Tailwind.',
                'waktu' => 'Minggu, 23 Juni 2025 - 13:00 WIB',
                'gambar' => 'https://source.unsplash.com/600x300/?design,uiux'
            ],
        ];

        return view('history', compact('events'));
    }
}
