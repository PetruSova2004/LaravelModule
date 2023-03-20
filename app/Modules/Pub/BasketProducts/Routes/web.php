<?php

Route::group(['prefix' => 'basket-products', 'middleware' => ['auth']], function () {
    Route::get('/', 'BasketProductsController@index')->name('basket-products.index');
    Route::get('/create/{id}/{user}', 'BasketProductsController@create')->name('basket-products.create');
    Route::post('/', 'BasketProductsController@store')->name('basket-products.store');
    Route::get('/{basketProduct}', 'BasketProductsController@show')->name('basket-products.read');
    Route::get('/edit/{basketProduct}', 'BasketProductsController@edit')->name('basket-products.edit');
    Route::put('/{basketProduct}', 'BasketProductsController@update')->name('basket-products.update');
    Route::delete('/{id}', 'BasketProductsController@destroy')->name('basket-products.delete');
});
