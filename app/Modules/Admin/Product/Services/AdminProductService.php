<?php

namespace App\Modules\Admin\Product\Services;


use App\Facades\SubCategoryService;
use App\Modules\Pub\Product\Models\Product;
use App\Modules\Pub\SubCategory\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class AdminProductService
{

    public function storeProduct($request)
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

            SubCategory::find($request->sub_category)->increment('products_count');
            DB::table('sub_categories_ru')->where('id', $request->sub_category)->increment('products_count');

            $last_en = Product::orderBy('id', 'desc')->first();
            $last_ru = DB::table('products_ru')->orderByDesc('id')->first();
//            dd($last_en);

            if (DB::table('binder_product_en_ru')->insert([
                'en_product_id' => $last_en->id,
                'ru_product_id' => $last_ru->id,
            ])) {
                SubCategoryService::productsCount();
                return redirect()->route('admin.products.index')->with('success', 'Product was added with success');
            }
        } else {
            return redirect()->back()->with('error', 'Something goes wrong');
        }

    }

    public function destroyProduct($product)
    {
        if (DB::table('binder_product_en_ru')->where('en_product_id', $product->id)) {
            Product::destroy($product->id);
            SubCategoryService::productsCount();
            return redirect()->route('admin.products.index')->with('success', 'Продукт был удален');
        }

        $ru_product = DB::table('binder_product_en_ru')->where('en_product_id', $product->id)->first();
        $binder = DB::table('binder_product_en_ru')->delete($ru_product->id);
        $ru = DB::table('products_ru')->delete($ru_product->ru_product_id);
        $en = Product::destroy($product->id);

        if ($binder && $ru && $en) {
            SubCategoryService::productsCount();
            return redirect()->route('admin.products.index')->with('success', 'Продукт был удален');
        } else {
            return redirect()->back()->with('error', 'Невозможно удалить продукт');
        }

    }

    public function updateProduct($request, $product)
    {
        $request->validate([
            'title' => 'required',
            'descr' => 'required|min:10',
            'sub_category' => 'Integer|required',
            'price' => 'required|Integer',
            'image' => 'required|Image',
        ]);

        $path = $request->file('image')->store('', ['disk' => 'new_products']);
        $binder = DB::table('binder_product_en_ru')->where('en_product_id', $product->id)->first();

        if (
            $product->update([
                'title' => $request->title,
                'description' => $request->descr,
                'img' => "assets/images/products/" . $path,
                'price' => $request->price,
                'subcategory_id' => $request->sub_category,
            ])
            && DB::table('products_ru')->where('id', $binder->ru_product_id)->update([
                'title' => $request->title_ru,
                'description' => $request->descr_ru,
                'img' => "assets/images/products/" . $path,
                'price' => $request->price,
                'subcategory_id' => $request->sub_category,
            ])) {
            SubCategoryService::productsCount();
            return redirect()->route('admin.products.index')->with('success', 'Product was updated with success');
        } else {
            return redirect()->back()->with('error', 'Something goes wrong');
        }
    }

}
