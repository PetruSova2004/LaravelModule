<?php

namespace App\Modules\Admin\Category\Controllers;

use App\Facades\ReceivingService;
use App\Modules\Pub\Category\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ReceivingService::getJsonAllCategories();
        $subCategories = ReceivingService::getJsonAllSubCategories();
        return view('Admin.Category.index', compact('categories', 'subCategories'));
    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Category.create');
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
            return redirect()->route('admin.categories.index')->with('success', 'Product was added with success');
        } else {
            return redirect()->back()->with('error', 'Something goes wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Admin\Category\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Admin\Category\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Modules\Admin\Category\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Modules\Admin\Category\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
