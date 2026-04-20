<?php

use Illuminate\Support\Facades\Route;

return view('welcome', ['guests' => \App\Models\Guest::latest()->get()]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
