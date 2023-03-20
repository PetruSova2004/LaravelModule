<?php

namespace App\Modules\Pub\Product\Services;

use App\Modules\Pub\Product\Models\Product;
use App\Services\Response\ResponseServise;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ProductService
{

    public function getProductsEn()
    {
        $products = Product::all();

        return $products;
    }

    public function getProductsRu()
    {
        $products = DB::table('products_ru')->select('*')->get();

        return $products;
    }

    public function getJsonAllProducts()
    {
        if (App::getLocale() == 'en') {
            $result = $this->getProductsEn();
        } elseif (App::getLocale() == 'ru') {
            $result = $this->getProductsRu();
        }

        $productsJson = json_decode(ResponseServise::sendJsonData(true, 200, [], [
            'items' => $result
        ]));
        // dd($productJson);

        $products = $productsJson->data->items;

        return $products;
    }

}
