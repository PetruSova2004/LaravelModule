<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AdminSubcategory extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SubCategoryService', 'App\Modules\Admin\SubCategory\Services\AdminSubCategoryService');
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
