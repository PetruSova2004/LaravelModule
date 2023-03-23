<?php

Route::group(['prefix' => 'categories', 'middleware' => []], function () {
    Route::get('/', 'CategoryController@index')->name('admin.categories.index');
    Route::get('/create', 'CategoryController@create')->name('admin.categories.create');
    Route::post('/', 'CategoryController@store')->name('admin.categories.store');
    Route::get('/{category}', 'CategoryController@show')->name('admin.categories.read');
    Route::get('/edit/{category}', 'CategoryController@edit')->name('admin.categories.edit');
    Route::put('/{category}', 'CategoryController@update')->name('admin.categories.update');
    Route::delete('/{category}', 'CategoryController@destroy')->name('admin.categories.delete');
});
