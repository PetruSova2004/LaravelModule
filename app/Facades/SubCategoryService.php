<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class SubCategoryService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SubCategoryService';
    }
}
