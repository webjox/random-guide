<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LocationProcessing;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('LocationProcessing', function ($app) {
            return new LocationProcessing();
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
