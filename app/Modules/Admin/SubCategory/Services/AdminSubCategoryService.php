<?php

namespace App\Modules\Admin\SubCategory\Services;

use App\Facades\CategoryService;
use App\Modules\Pub\Product\Models\Product;
use App\Modules\Pub\SubCategory\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class AdminSubCategoryService
{

    public function storeSubCategory($request)
    {
        $request->validate([
            'title' => 'required',
            'title_ru' => 'required',
            'slug' => 'required',
            'slug_ru' => 'required',
            'category' => 'required',
        ]);

        $category_id = DB::table('binder_category_en_ru')->where('en_category_id', $request->category)->first();

        if (SubCategory::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'products_count' => 0,
                'category_id' => $request->category,
            ])
            &&
            DB::table('sub_categories_ru')->insert([
                'title' => $request->title_ru,
                'slug' => $request->slug_ru,
                'products_count' => 0,
                'category_id' => $category_id->ru_category_id,
            ])) {

            $en_subCategory = SubCategory::orderByDesc('id')->first();
            $ru_subCategory = DB::table('sub_categories_ru')->orderByDesc('id')->first();

            if (DB::table('binder_sub_category_en_ru')->insert([
                'en_subCategory_id' => $en_subCategory->id,
                'ru_subCategory_id' => $ru_subCategory->id,
            ])) {
                CategoryService::subCategoryCount();
                return redirect()->route('admin.sub-categories.index')->with('success', 'Category was added with success');
            } else {
                return redirect()->back()->with('error', 'Something goes wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Something goes wrong');
        }
    }

    public function updateSubCategory($request, $subCategory)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'title_ru' => 'required',
            'slug_ru' => 'required',
            'category' => 'required',
        ]);

        $binder = DB::table('binder_sub_category_en_ru')->where('en_subCategory_id', $subCategory->id)->first();

        $category_id = DB::table('binder_category_en_ru')->where('en_category_id', $request->category)->first();

        if ($subCategory->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'products_count' => 0,
                'category_id' => $category_id->en_category_id,
            ])
            &&
            DB::table('sub_categories_ru')->where('id', $binder->ru_subCategory_id)->update([
                'title' => $request->title_ru,
                'slug' => $request->slug_ru,
                'products_count' => 0,
                'category_id' => $category_id->ru_category_id,
            ])) {
            CategoryService::subCategoryCount();
            return redirect()->route('admin.sub-categories.index')->with('success', 'Sub-Category has been updated with success');
        } else {
            return redirect()->back()->with('error', 'Something goes wrong');
        }
    }

    public function destroySubCategory($subCategory)
    {
        $products = Product::all();
        $products_ru = DB::table('products_ru')->get('*');

        foreach ($products as $product) {
            if ($product->subcategory_id == $subCategory->id) {
                return redirect()->back()->with('error', 'У данной Под-Категории есть привязанные продукты');
            }
        }
        foreach ($products_ru as $product) {
            if ($product->subcategory_id == $subCategory->id) {
                return redirect()->back()->with('error', 'У данной Под-Категории есть привязанные продукты');
            }
        }

        $binder_subCategory = DB::table('binder_sub_category_en_ru')->where('en_subCategory_id', $subCategory->id)->first();

        $binder = DB::table('binder_sub_category_en_ru')->where('en_subCategory_id', $subCategory->id)->delete();

        $ru = DB::table('sub_categories_ru')->where('id', $binder_subCategory->ru_subCategory_id)->delete();

        $en = SubCategory::destroy($subCategory->id);

        if ($binder && $ru && $en) {
            CategoryService::subCategoryCount();
            return redirect()->route('admin.sub-categories.index')->with('success', 'Категория была удаленна');
        } else {
            return redirect()->back()->with('error', 'Невозможно удалить продукт');
        }
    }

    public function productsCount()
    {
        $subCategories = SubCategory::all();
        $products = Product::all();
        $ru_subCategories = DB::table('sub_categories_ru')->get('*');

        foreach ($subCategories as $subCategory) {
            $subCategory->update([
                'products_count' => 0
            ]);
            foreach ($products as $product) {
                if ($subCategory->id == $product->subcategory_id) {
                    $subCategory->increment('products_count', 1);
                }
            }
        }

        foreach ($ru_subCategories as $ruSubCategory) {
            DB::table('sub_categories_ru')->where('id', $ruSubCategory->id)->update([
                'products_count' => 0
            ]);
            foreach ($products as $product) {
                if ($ruSubCategory->id == $product->subcategory_id) {
                    DB::table('sub_categories_ru')->where('id', $ruSubCategory->id)->increment('products_count', 1);
                }
            }
        }
        return true;
    }

}
