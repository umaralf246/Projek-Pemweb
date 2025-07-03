<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'location',
        'event_time',
        // tambahkan field lain jika ada
    ];

    /**
     * Relasi: Satu event bisa punya banyak registrasi.
     * Artinya satu event bisa diikuti oleh banyak user yang mendaftar.
     */
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
