<?php

use App\Models\Participant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        // Only get people where attendance is 'yes'
        'guests' => \App\Models\Participant::where('attendance', 'yes')->latest()->get()
    ]);
});