<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/history', [HistoryController::class, 'index'])->middleware('auth')->name('history');


Route::get('/feedback/{id}', function ($id) {
    return view('feedback', ['id' => $id]);
})->name('feedback')->middleware('auth');

Route::post('/feedback/{id}', function (Request $request, $id) {
    return redirect()->route('feedback', $id)->with('showModal', true);
})->name('feedback.submit')->middleware('auth');