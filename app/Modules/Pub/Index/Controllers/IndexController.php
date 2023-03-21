<?php

namespace App\Modules\Pub\Index\Controllers;

use App\Modules\Pub\Index\Services\IndexService;
use App\Modules\Pub\Index\Services\ReceivingService;
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
        $newArrivalProducts = $this->service->getJsonNewProducts();
        $featuredProducts = $this->service->getJsonFeaturedProducts();
        $bestProducts = $this->service->getJsonBestProducts();
        $topProducts = $this->service->getJsonTopProducts();
        $categories = $this->service->getJsonAllCategories();
        $subCategories = $this->service->getJsonAllSubCategories();
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
