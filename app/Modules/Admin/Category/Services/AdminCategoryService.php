<?php

namespace App\Modules\Admin\Category\Services;

use App\Modules\Pub\Category\Models\Category;
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

        if ($binder || $ru || $en) {
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
            ]) ||
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
}
