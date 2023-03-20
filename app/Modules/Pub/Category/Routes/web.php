<?php

Route::group(['prefix' => 'categories', 'middleware' => []], function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/', 'CategoryController@store')->name('categories.store');
    Route::get('/{category}', 'CategoryController@show')->name('categories.read');
    Route::get('/edit/{category}', 'CategoryController@edit')->name('categories.edit');
    Route::put('/{category}', 'CategoryController@update')->name('categories.update');
    Route::delete('/{category}', 'CategoryController@destroy')->name('categories.delete');
});