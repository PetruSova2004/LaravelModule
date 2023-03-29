<?php

namespace App\Modules\Pub\Product\Services;

use App\Modules\Pub\Category\Models\Category;
use App\Modules\Pub\Product\Models\Product;
use App\Services\Response\ResponseServise;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ProductService
{

    public function incrementViews($product)
    {
        $binder = DB::table('binder_product_en_ru')->where('en_product_id', $product->id)->first();
        $ru_product = DB::table('products_ru')->where('id', $binder->ru_product_id)->increment('views', 1);
        $en_product_views = DB::table('products')->where('id', $product->id)->increment('views', 1);
    }


}
