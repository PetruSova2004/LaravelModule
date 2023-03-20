<?php

namespace App\Modules\Pub\Localization\Services;

use Illuminate\Support\Facades\App;

class LocaleService
{

    public function getLocale()
    {
        $currentLocale = App::getLocale();
        return $currentLocale;
    }

    public function setLocale($locale)
    {
        session(['locale' => $locale]);
    }

}
