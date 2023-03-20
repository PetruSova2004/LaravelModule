<?php

Route::group(['prefix' => 'products', 'middleware' => ['admin']], function () {
    Route::get('/', 'ProductController@index')->name('admin.products.index');
    Route::get('/create', 'ProductController@create')->name('admin.products.create');
    Route::post('/', 'ProductController@store')->name('admin.products.store');
    Route::get('/{product}', 'ProductController@show')->name('admin.products.read');
    Route::get('/edit/{product}', 'ProductController@edit')->name('admin.products.edit');
    Route::put('/{product}', 'ProductController@update')->name('admin.products.update');
    Route::delete('/{product}', 'ProductController@destroy')->name('admin.products.delete');
});
