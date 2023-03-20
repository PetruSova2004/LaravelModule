<?php

Route::group(['prefix' => 'sub-categories', 'middleware' => []], function () {
    Route::get('/', 'Api\SubCategoryController@index')->name('api.sub-categories.index');
    Route::post('/', 'Api\SubCategoryController@store')->name('api.sub-categories.store');
    Route::get('/{subCategory}', 'Api\SubCategoryController@show')->name('api.sub-categories.read');
    Route::put('/{subCategory}', 'Api\SubCategoryController@update')->name('api.sub-categories.update');
    Route::delete('/{subCategory}', 'Api\SubCategoryController@destroy')->name('api.sub-categories.delete');
});