<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::view('/', 'jadwal');
Route::view('/jadwal', 'jadwal');
Route::view('/profil', 'profil');
Route::view('/daftar', 'daftar');
Route::view('/kalender', 'kalender');
Route::view('/kategori', 'kategori');
Route::view('/detail', 'detail');
Route::view('/workshop', 'workshop');
Route::view('/ukmfest', 'ukmfest');
Route::view('/workshop-mini', 'workshop-mini');

Route::post('/daftar', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
