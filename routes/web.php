<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

// Auth routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Profil
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// History event
Route::get('/history', [HistoryController::class, 'index'])->middleware('auth')->name('history');

// Feedback
Route::get('/feedback/{id}', function ($id) {
    return view('feedback', ['id' => $id]);
})->name('feedback')->middleware('auth');

Route::post('/feedback/{id}', function (Request $request, $id) {
    return redirect()->route('feedback', $id)->with('showModal', true);
})->name('feedback.submit')->middleware('auth');

// Auth scaffolding
require __DIR__.'/auth.php';
