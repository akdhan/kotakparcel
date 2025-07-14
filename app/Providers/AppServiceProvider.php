<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

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
            Broadcast::routes();

        if (file_exists(base_path('routes/channels.php'))) {
            require base_path('routes/channels.php');
        }
         
        Carbon::setLocale('id');
    }

}
