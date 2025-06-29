<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserEventController; 
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\EventController;
use App\Models\Event;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/check-auth', function () {
    dd(Auth::id(), Auth::user());
});
// Auth routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Dashboard
Route::get('/dashboard', [UserEventController::class, 'dashboard'])->middleware('auth');
Route::get('/daftar/{id}', [UserEventController::class, 'register'])->name('event.register');
Route::get('/dashboard', [UserEventController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');


    // Profil
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [UserEventController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

// Jadwal
Route::get('/jadwal', [ScheduleController::class, 'index'])->middleware(['auth'])->name('jadwal');

// History event
Route::get('/history', [HistoryController::class, 'index'])->middleware('auth')->name('history');

// Feedback
Route::get('/feedback/{registration}', [FeedbackController::class, 'show'])->name('feedback.show');
Route::post('/feedback/{registration}', [FeedbackController::class, 'store'])->name('feedback.store');


// Daftar event
Route::middleware(['auth'])->group(function () {
    Route::get('/event/{id}/daftar', [EventController::class, 'show'])->name('event.show');
    Route::post('/event/register/{id}', [EventController::class, 'register'])->name('event.register');
});
Route::post('/event/register/{id}', [EventController::class, 'register'])
    ->middleware('auth')
    ->name('event.register');


Route::get('/test-auth', function () {
    dd(Auth::id(), Auth::user());
});




// Auth scaffolding
require __DIR__.'/auth.php';
