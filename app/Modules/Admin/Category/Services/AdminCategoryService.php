<?php

namespace App\Modules\Admin\Category\Services;

use App\Modules\Pub\Category\Models\Category;
use App\Modules\Pub\SubCategory\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class AdminCategoryService
{

    public function storeCategory($request)
    {
        $request->validate([
            'title' => 'required',
            'title_ru' => 'required',
            'slug' => 'required',
            'slug_ru' => 'required',
        ]);

        if (Category::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'subcategories_count' => 0,
            ]) &&
            DB::table('categories_ru')->insert([
                'title' => $request->title_ru,
                'slug' => $request->slug_ru,
                'subcategories_count' => 0,
            ])) {

            $en_category = Category::orderBy('id', 'desc')->first();
            $ru_category = DB::table('categories_ru')->orderByDesc('id')->first();

            if (DB::table('binder_category_en_ru')->insert([
                'en_category_id' => $en_category->id,
                'ru_category_id' => $ru_category->id,
            ])) {
                return redirect()->route('admin.categories.index')->with('success', 'Category was added with success');
            } else {
                return redirect()->back()->with('error', 'Something goes wrong');
            }
        }
    }

    public function destroyCategory($category)
    {
//        dd($category->id);
        if (DB::table('binder_category_en_ru')->where('en_category_id', $category->id) == null) {
            Category::destroy($category->id);
            return redirect()->route('admin.categories.index')->with('success', 'Продукт был удален');
        }

        $binder_product = DB::table('binder_category_en_ru')->where('en_category_id', $category->id)->first();

        $binder = DB::table('binder_category_en_ru')->where('en_category_id', $category->id)->delete();
        $ru = DB::table('categories_ru')->delete($binder_product->ru_category_id);
        $en = Category::destroy($category->id);

        if ($binder && $ru && $en) {
            return redirect()->route('admin.categories.index')->with('success', 'Категория была удаленна');
        } else {
            return redirect()->back()->with('error', 'Невозможно удалить продукт');
        }

    }

    public function updateCategory($request, $category)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'title_ru' => 'required',
            'slug_ru' => 'required',
        ]);

        $binder = DB::table('binder_category_en_ru')->where('en_category_id', $category->id)->first();

        if ($category->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'subcategories_count' => 0
            ]) &&
            DB::table('categories_ru')->where('id', $binder->ru_category_id)->update([
                'title' => $request->title_ru,
                'slug' => $request->slug_ru,
                'subcategories_count' => 0
            ])
        ) {
            return redirect()->route('admin.categories.index')->with('success', 'Category was updated with success');
        } else {
            return redirect()->back()->with('error', 'Something goes wrong');
        }
    }

    public function subCategoryCount()
    {
        $subCategories = SubCategory::all();
        $categories = Category::all();
        $ru_subCategories = DB::table('sub_categories_ru')->get('*');
        $ru_Categories = DB::table('categories_ru')->get('*');

        foreach ($categories as $category) {
            $category->update([
                'subcategories_count' => 0,
            ]);
            foreach ($subCategories as $subCategory) {
                if ($category->id == $subCategory->category_id) {
                    $category->increment('subcategories_count', 1);
                }
            }
        }

        foreach ($ru_Categories as $ru_Category) {
            DB::table('categories_ru')->where('id', $ru_Category->id)->update([
                'subcategories_count' => 0,
            ]);

            foreach ($ru_subCategories as $subCategory) {
                if ($ru_Category->id == $subCategory->category_id) {
                    DB::table('categories_ru')->where('id', $ru_Category->id)->increment('subcategories_count', 1);
                }
            }
        }


    }
}
