<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class IndexServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        return $this->app->bind('IndexService', 'App\Modules\Pub\Index\Services\IndexService');
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
