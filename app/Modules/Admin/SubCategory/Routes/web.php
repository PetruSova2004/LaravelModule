<?php

Route::group(['prefix' => 'sub-categories', 'middleware' => []], function () {
    Route::get('/', 'SubCategoryController@index')->name('admin.sub-categories.index');
    Route::get('/create', 'SubCategoryController@create')->name('admin.sub-categories.create');
    Route::post('/', 'SubCategoryController@store')->name('admin.sub-categories.store');
    Route::get('/{subCategory}', 'SubCategoryController@show')->name('admin.sub-categories.read');
    Route::get('/edit/{subCategory}', 'SubCategoryController@edit')->name('admin.sub-categories.edit');
    Route::put('/{subCategory}', 'SubCategoryController@update')->name('admin.sub-categories.update');
    Route::delete('/{subCategory}', 'SubCategoryController@destroy')->name('admin.sub-categories.delete');
});
