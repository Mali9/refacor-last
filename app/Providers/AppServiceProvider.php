<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SendNotificationService;
use SendSmsService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(SendNotificationInterface::class, SendSmsService::class);
        $this->app->bind(SendNotificationInterface::class, SendNotificationService::class);
    }
}
