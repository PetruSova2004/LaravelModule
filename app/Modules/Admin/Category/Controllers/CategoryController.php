<?php

namespace App\Modules\Admin\Category\Controllers;

use App\Facades\ReceivingService;
use App\Modules\Admin\Category\Services\AdminCategoryService;
use App\Modules\Pub\Category\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function __construct(AdminCategoryService $service)
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
        return $this->service->storeCategory($request);
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
        $binder = DB::table('binder_category_en_ru')->where('en_category_id', $category->id)->first();
        $ru_category = DB::table('categories_ru')->where('id', $binder->ru_category_id)->first();

        return view('Admin.Category.edit', compact('category', 'ru_category'));
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
        return $this->service->updateCategory($request, $category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Modules\Admin\Category\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        return $this->service->destroyCategory($category);
    }
}
