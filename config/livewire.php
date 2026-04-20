<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Livewire Asset URL
    |--------------------------------------------------------------------------
    | This forces Livewire to use the HTTPS URL for all its internal 
    | JavaScript and POST requests, fixing the "Mixed Content" and 500 errors.
    */
    'asset_url' => 'https://prom-invitation-production.up.railway.app',

    'app_url' => 'https://prom-invitation-production.up.railway.app',

    'middleware_group' => ['web'],

    'manifest_path' => null,

    'back_button_cache' => false,

    'render_on_redirect' => false,
];