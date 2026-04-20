<?php

use App\Models\Participant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'guests' => Participant::latest()->get()
    ]);
});