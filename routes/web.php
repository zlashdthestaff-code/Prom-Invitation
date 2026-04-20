<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>TKJ Connectivity Test</h1><p>If you see this, Nixpacks is working perfectly.</p>";
});