<?php

Route::group(['prefix' => 'products', 'middleware' => ['local']], function () {
    Route::get('/', 'ProductController@index')->name('products.index');
    Route::get('/create', 'ProductController@create')->name('products.create');
    Route::post('/', 'ProductController@store')->name('products.store');
    Route::get('/{product}', 'ProductController@show')->name('products.read');
    Route::get('/edit/{product}', 'ProductController@edit')->name('products.edit');
    Route::put('/{product}', 'ProductController@update')->name('products.update');
    Route::delete('/{product}', 'ProductController@destroy')->name('products.delete');
});
