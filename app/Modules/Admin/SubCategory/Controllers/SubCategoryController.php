<?php

namespace App\Modules\Admin\SubCategory\Controllers;

use App\Facades\CategoryService;
use App\Facades\ReceivingService;
use App\Facades\SubCategoryService;
use App\Modules\Pub\Product\Models\Product;
use App\Modules\Pub\SubCategory\Models\SubCategory;
use App\Modules\Admin\SubCategory\Services\AdminSubCategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{

    public function __construct(AdminSubCategoryService $service)
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
        $subCategories = ReceivingService::getJsonAllSubCategories();
        return view('Admin.SubCategory.index', compact('subCategories'));

//        CategoryService::subCategoryCount();
    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ReceivingService::getJsonAllCategories();
        return view('Admin.SubCategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return SubCategoryService::storeSubCategory($request);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Pub\SubCategory\Models\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Pub\SubCategory\Models\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $binder = DB::table('binder_sub_category_en_ru')->where('en_subCategory_id', $subCategory->id)->first();

        $ru_subCategory = DB::table('sub_categories_ru')->where('id', $binder->ru_subCategory_id)->first();

        $categories = ReceivingService::getJsonAllCategories();

        return view('Admin.SubCategory.edit', compact('ru_subCategory', 'subCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Modules\Pub\SubCategory\Models\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        return SubCategoryService::updateSubCategory($request, $subCategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Modules\Pub\SubCategory\Models\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        return SubCategoryService::destroySubCategory($subCategory);
    }
}
