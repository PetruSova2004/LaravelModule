<?php

namespace App\Modules\Admin\Product\Controllers;

use App\Facades\ReceivingService;
use App\Modules\Pub\Product\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
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
        $request->validate([
            'title' => 'required',
            'descr' => 'required|min:10',
            'sub_category' => 'Integer|required',
            'price' => 'required|Integer',
            'image' => 'required|Image',
        ]);

        $path = $request->file('image')->store('', ['disk' => 'new_products']);

        if (Product::create([
                'title' => $request->title,
                'description' => $request->descr,
                'img' => "assets/images/products/" . $path,
                'price' => $request->price,
                'subcategory_id' => $request->sub_category,
            ]) &&
            DB::table('products_ru')->insert([
                'title' => $request->title_ru,
                'description' => $request->descr_ru,
                'img' => "assets/images/products/" . $path,
                'price' => $request->price,
                'subcategory_id' => $request->sub_category,
            ])) {

            $last_en = Product::orderBy('id', 'desc')->first();
            $last_ru = DB::table('products_ru')->orderByDesc('id')->first();
//            dd($last_en);

            if (DB::table('binder_product_en_ru')->insert([
                'en_product_id' => $last_en->id,
                'ru_product_id' => $last_ru->id,
            ])) {
                return redirect()->route('admin.products.index')->with('success', 'Product was added with success');
            }
        } else {
            return redirect()->back()->with('error', 'Something goes wrong');
        }


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Modules\Admin\Product\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
//        dd($product->id);
        $item = DB::table('products')->delete($product->id);
        $item_ru = DB::table('products_ru')->delete($product->id);
//        dd($item_ru);
        if ($item_ru && $item) {
            return redirect()->route('admin.products.index')->with('success', 'Продукт был удален');
        } else {
            return redirect()->back()->with('error', 'Невозможно удалить продукт');
        }

    }
}
