<?php

namespace App\Modules\Admin\Product\Controllers;

use App\Facades\ReceivingService;
use App\Modules\Admin\Product\Services\AdminProductService;
use App\Modules\Pub\Product\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{

    public function __construct(AdminProductService $service)
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
        $products = ReceivingService::getJsonAllProducts();
        $subCategories = ReceivingService::getJsonAllSubCategories();
        return view('Admin.Product.index', compact('products', 'subCategories'));
    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subCategories = ReceivingService::getJsonAllSubCategories();
        return view('Admin.Product.create', compact('subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->storeProduct($request);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Admin\Product\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Admin\Product\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $subCategories = ReceivingService::getJsonAllSubCategories();

        $binder_ru = DB::table('binder_product_en_ru')->where('en_product_id', $product->id)->first();
        $ru_product = DB::table('products_ru')->where('id', $binder_ru->ru_product_id)->first();
//        dd($ru_product);

        return view('Admin.Product.edit', compact('subCategories', 'product', 'ru_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Modules\Admin\Product\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        return $this->service->updateProduct($request, $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Modules\Admin\Product\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        return $this->service->destroyProduct($product);
    }
}
