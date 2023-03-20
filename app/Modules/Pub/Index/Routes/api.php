<?php

Route::group(['prefix' => 'indices', 'middleware' => []], function () {
    Route::get('/', 'Api\IndexController@index')->name('api.indices.index');
    Route::post('/', 'Api\IndexController@store')->name('api.indices.store');
    Route::get('/{index}', 'Api\IndexController@show')->name('api.indices.read');
    Route::put('/{index}', 'Api\IndexController@update')->name('api.indices.update');
    Route::delete('/{index}', 'Api\IndexController@destroy')->name('api.indices.delete');
});