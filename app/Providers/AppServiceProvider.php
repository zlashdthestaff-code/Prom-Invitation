<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;

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
        \Illuminate\Database\Eloquent\Model::unguard();
        if (app()->environment('production')) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
    }

    /**
     * Configure the application's URL scheme.
     */
    private function configureUrl(): void
    {
        if ($this->app->environment('production') || $this->app->environment('staging')) {
            URL::forceScheme('https');
        }
    }

    /**
     * Configure the application's database commands.
     */
    private function configureCommands(): void
    {
        // We set this to FALSE to stop the "Prohibited" crash on Railway
        DB::prohibitDestructiveCommands(false);
    }

    /**
     * Configure the application's Eloquent models.
     */
    private function configureModels(): void
    {
        Model::shouldBeStrict(! $this->app->isProduction());
        Model::unguard(); // This helps with the Participant mass-assignment
    }

    /**
     * Configure the application's date handling.
     */
    private function configureDates(): void
    {
        Date::use(CarbonImmutable::class);
    }
}