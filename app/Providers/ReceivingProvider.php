<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ReceivingProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ReceivingService', 'App\Services\Receiving\ReceivingService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
