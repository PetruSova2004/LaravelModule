<?php

Route::group(['prefix' => 'basket-products', 'middleware' => []], function () {
    Route::get('/', 'Api\BasketProductsController@index')->name('api.basket-products.index');
    Route::post('/', 'Api\BasketProductsController@store')->name('api.basket-products.store');
    Route::get('/{basketProduct}', 'Api\BasketProductsController@show')->name('api.basket-products.read');
    Route::put('/{basketProduct}', 'Api\BasketProductsController@update')->name('api.basket-products.update');
    Route::delete('/{basketProduct}', 'Api\BasketProductsController@destroy')->name('api.basket-products.delete');
});