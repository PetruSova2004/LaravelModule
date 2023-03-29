<?php

namespace App\Services\Receiving;

use App\Modules\Pub\Category\Models\Category;
use App\Modules\Pub\Product\Models\Product;
use App\Modules\Pub\SubCategory\Models\SubCategory;
use App\Services\Response\ResponseServise;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;


class ReceivingService
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


    private function getAllSubCategoriesEn()
    {
        $subCategories = SubCategory::all();
        return $subCategories;
    }

    private function getAllSubCategoriesRu()
    {
        $subCategories = DB::table('sub_categories_ru')->get('*');
        return $subCategories;
    }

    public function getJsonAllSubCategories()
    {
        if (App::getLocale() == 'en') {
            $result = $this->getAllSubCategoriesEn();
        } elseif (App::getLocale() == 'ru') {
            $result = $this->getAllSubCategoriesRu();
        }

        $categoriesJson = json_decode(ResponseServise::sendJsonData(true, 200, [], [
            'items' => $result
        ]));

        $categories = $categoriesJson->data->items;

        return $categories;
    }


    private function getAllCategoriesEn()
    {
        $categories = Category::all();
        return $categories;
    }

    private function getAllCategoriesRu()
    {
        $categories = DB::table('categories_ru')->get('*');
        return $categories;
    }

    public function getJsonAllCategories()
    {
        if (App::getLocale() == 'en') {
            $result = $this->getAllCategoriesEn();
        } elseif (App::getLocale() == 'ru') {
            $result = $this->getAllCategoriesRu();
        }

        $categoriesJson = json_decode(ResponseServise::sendJsonData(true, 200, [], [
            'items' => $result
        ]));

        $categories = $categoriesJson->data->items;

        return $categories;
    }


    private function getFeaturedProductsEn()
    {
        $products = Product::orderByDesc('views')->take(4)->get();

        return $products;
    }

    private function getFeaturedProductsRu()
    {
        $products = DB::table('products_ru')->orderByDesc('views')->take(4)->get();

        return $products;
    }

    public function getJsonFeaturedProducts()
    {
        if (App::getLocale() == 'en') {
            $result = $this->getFeaturedProductsEn();
        } elseif (App::getLocale() == 'ru') {
            $result = $this->getFeaturedProductsRu();
        }

        $productsJson = json_decode(ResponseServise::sendJsonData(true, 200, [], [
            'items' => $result
        ]));
        // dd($productJson);

        $products = $productsJson->data->items;

        return $products;
    }


    private function getAllNewProductsEn()
    {
        $products = Product::orderByDesc('id')->take(4)->get();
        return $products;
    }

    private function getAllNewProductsRu()
    {
        $products = DB::table('products_ru')->orderByDesc('id')->take(4)->get('*');
        return $products;
    }

    public function getJsonNewProducts()
    {
        if (App::getLocale() == 'en') {
            $result = $this->getAllNewProductsEn();
        } elseif (App::getLocale() == 'ru') {
            $result = $this->getAllNewProductsRu();
        }

        $categoriesJson = json_decode(ResponseServise::sendJsonData(true, 200, [], [
            'items' => $result
        ]));

        $categories = $categoriesJson->data->items;

        return $categories;
    }


    private function getBestProductsEn()
    {
        $products = Product::where('id', '>', 5)->where('id', '<', 10)->get('*');

        return $products;
    }

    private function getBestProductsRu()
    {
        $products = DB::table('products_ru')->where('id', '>', 5)->where('id', '<', 10)->get('*');

        return $products;
    }

    public function getJsonBestProducts()
    {
        if (App::getLocale() == 'en') {
            $result = $this->getBestProductsEn();
        } elseif (App::getLocale() == 'ru') {
            $result = $this->getBestProductsRu();
        }

        $productsJson = json_decode(ResponseServise::sendJsonData(true, 200, [], [
            'items' => $result
        ]));
        // dd($productJson);

        $products = $productsJson->data->items;

        return $products;
    }


    private function getTopProductsEn()
    {
        $products = Product::where('id', '>', 10)->where('id', '<', 15)->get('*');

        return $products;
    }

    private function getTopProductsRu()
    {
        $products = DB::table('products_ru')->where('id', '>', 10)->where('id', '<', 15)->get('*');

        return $products;
    }

    public function getJsonTopProducts()
    {
        if (App::getLocale() == 'en') {
            $result = $this->getTopProductsEn();
        } elseif (App::getLocale() == 'ru') {
            $result = $this->getTopProductsRu();
        }

        $productsJson = json_decode(ResponseServise::sendJsonData(true, 200, [], [
            'items' => $result
        ]));
        // dd($productJson);

        $products = $productsJson->data->items;

        return $products;
    }


    private function getOneProductEn($product)
    {
        $products = Product::where('id', $product->id)->first();
        return $products;
    }

    private function getOneProductRu($product)
    {
        $binder = DB::table('binder_product_en_ru')->where('en_product_id', $product->id)->first();
        $products = DB::table('products_ru')->where('id', $binder->ru_product_id)->first();
        return $products;
    }

    public function getJsonOneProduct($product)
    {
        if (App::getLocale() == 'en') {
            $result = $this->getOneProductEn($product);
        } elseif (App::getLocale() == 'ru') {
            $result = $this->getOneProductRu($product);
        }

        $productsJson = json_decode(ResponseServise::sendJsonData(true, 200, [], [
            'items' => $result
        ]));

        $products = $productsJson->data->items;

        return $products;
    }




}
