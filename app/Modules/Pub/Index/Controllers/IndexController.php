<?php

namespace App\Modules\Pub\Index\Controllers;

use App\Facades\ReceivingService;
use App\Modules\Pub\Index\Services\IndexService;
use App\Services\LocaleTest\Locale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    private $service;

    public function __construct(IndexService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $newArrivalProducts = ReceivingService::getJsonNewProducts();
        $featuredProducts = ReceivingService::getJsonFeaturedProducts();
        $bestProducts = ReceivingService::getJsonBestProducts();
        $topProducts = ReceivingService::getJsonTopProducts();
        $categories = ReceivingService::getJsonAllCategories();
        $subCategories = ReceivingService::getJsonAllSubCategories();
        $time = $this->service->getPresentTime();

        return view('Pub.index', compact('user', 'featuredProducts', 'categories', 'subCategories', 'newArrivalProducts', 'time', 'bestProducts', 'topProducts'));
    }

    public function subscribingUser(Request $request)
    {
        if ($this->service->subscribeUser($request)) {
            return redirect()->back()->with('success', 'Successfully Subscribing');
        } else {
            return redirect()->back()->with('error', 'Oops, Something goes wrong');
        }

    }
}
