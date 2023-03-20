<?php

namespace App\Modules\Pub\Localization\Controllers;

use App\Modules\Pub\Localization\Models\Localization;
use App\Modules\Pub\Localization\Services\LocaleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller
{

    public function __construct(LocaleService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        $this->service->setLocale($locale);
        return redirect()->back();
    }
}
