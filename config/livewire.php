<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Livewire Asset URL
    |--------------------------------------------------------------------------
    | Set to null to let the ServiceProvider's forceScheme(https) handle it.
    */

    'asset_url' => null,

    'app_url' => env('APP_URL', 'https://prom-invitation-production.up.railway.app'),

    'middleware_group' => ['web'],

    'manifest_path' => null,

    'back_button_cache' => false,

    'render_on_redirect' => false,

];