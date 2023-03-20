<?php

Route::group(['prefix' => 'categories', 'middleware' => []], function () {
    Route::get('/', 'Api\CategoryController@index')->name('api.categories.index');
    Route::post('/', 'Api\CategoryController@store')->name('api.categories.store');
    Route::get('/{category}', 'Api\CategoryController@show')->name('api.categories.read');
    Route::put('/{category}', 'Api\CategoryController@update')->name('api.categories.update');
    Route::delete('/{category}', 'Api\CategoryController@destroy')->name('api.categories.delete');
});