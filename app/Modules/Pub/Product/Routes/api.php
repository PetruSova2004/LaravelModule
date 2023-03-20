<?php

Route::group(['prefix' => 'products', 'middleware' => []], function () {
    Route::get('/', 'Api\ProductController@index')->name('api.products.index');
    Route::post('/', 'Api\ProductController@store')->name('api.products.store');
    Route::get('/{product}', 'Api\ProductController@show')->name('api.products.read');
    Route::put('/{product}', 'Api\ProductController@update')->name('api.products.update');
    Route::delete('/{product}', 'Api\ProductController@destroy')->name('api.products.delete');
});