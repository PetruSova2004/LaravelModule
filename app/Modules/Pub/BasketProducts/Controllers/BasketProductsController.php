<?php

namespace App\Modules\Pub\BasketProducts\Controllers;

use App\Modules\Pub\Product\Models\Product;
use App\Modules\Pub\SubCategory\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use App\Modules\Pub\BasketProducts\Models\BasketProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasketProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baskets = BasketProduct::all();
        $products = Product::all();
        $subcategories = SubCategory::all();
        $user = Auth::user();


        return view('Pub.basket', compact('baskets', 'products', 'user', 'subcategories'));

    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id, $user_id)
    {
        BasketProduct::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ]);
        return redirect()->back()->with('success', 'Product has been added successfully');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Pub\BasketProducts\Models\BasketProduct  $basketProduct
     * @return \Illuminate\Http\Response
     */
    public function show(BasketProduct $basketProduct)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Pub\BasketProducts\Models\BasketProduct  $basketProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(BasketProduct $basketProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Pub\BasketProducts\Models\BasketProduct  $basketProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasketProduct $basketProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Pub\BasketProducts\Models\BasketProduct  $basketProduct
     * @return \Illuminate\Http\Response
     */

    public function destroy($basketProduct)
    {
        $product = BasketProduct::where('product_id', $basketProduct)->firstOrFail();
        BasketProduct::destroy($product->id);
        return redirect()->back()->with('success', 'Product has been removed from basket');

    }
}
