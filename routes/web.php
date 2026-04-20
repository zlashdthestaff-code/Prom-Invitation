<?php

use App\Models\Participant; // Changed from Guest
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'guests' => Participant::latest()->get() // We keep 'guests' as the variable name for the Blade loop
    ]);
});
// Keep your other routes below...
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});