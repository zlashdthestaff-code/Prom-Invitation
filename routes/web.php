<?php

use App\Models\Participant;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// YOUR EXISTING CODE - DO NOT CHANGE
Route::get('/', function () {
    return view('welcome', [
        'guests' => \App\Models\Participant::where('attendance', 'yes')->latest()->get()
    ]);
});

// --- UPDATED ADMIN ROUTE ---
Route::get('/admin-portal', function (Request $request) {
    // Hidden key check
    if ($request->query('key') !== 'prom2026') {
        abort(404);
    }

    $query = Participant::query();

    // Toggle logic: if ?status=yes is in the URL, filter the list
    if ($request->query('status') === 'yes') {
        $query->where('attendance', 'yes');
    }

    $guests = $query->orderBy('created_at', 'desc')->get();

    return view('admin.guest-list', compact('guests'));
});