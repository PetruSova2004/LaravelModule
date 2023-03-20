<?php

Route::group(['prefix' => 'sub-categories', 'middleware' => []], function () {
    Route::get('/', 'SubCategoryController@index')->name('sub-categories.index');
    Route::get('/create', 'SubCategoryController@create')->name('sub-categories.create');
    Route::post('/', 'SubCategoryController@store')->name('sub-categories.store');
    Route::get('/{subCategory}', 'SubCategoryController@show')->name('sub-categories.read');
    Route::get('/edit/{subCategory}', 'SubCategoryController@edit')->name('sub-categories.edit');
    Route::put('/{subCategory}', 'SubCategoryController@update')->name('sub-categories.update');
    Route::delete('/{subCategory}', 'SubCategoryController@destroy')->name('sub-categories.delete');
});
