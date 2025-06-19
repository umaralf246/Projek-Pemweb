<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('tambah_event');
});

use App\Http\Controllers\EventController;

Route::get('/tambah-event', [EventController::class, 'form']);
Route::post('/tambah-event', [EventController::class, 'simpan']);
