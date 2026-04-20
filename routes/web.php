<?php

use App\Models\Participant;

Route::get('/', function () {
    $count = Participant::count();
    return "<h1>Database Test</h1><p>Connection successful! Total participants: " . $count . "</p>";
});