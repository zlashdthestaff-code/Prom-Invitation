<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 1. Allow saving to database
        Model::unguard();

        // 2. Force HTTPS for Railway Production
        if (app()->environment('production') || env('APP_URL') !== 'http://localhost') {
            URL::forceScheme('https');
        }
    }
}