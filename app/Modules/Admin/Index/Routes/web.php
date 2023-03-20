<?php

Route::group(['prefix' => 'indices', 'middleware' => ['admin']], function () {
    Route::get('/', 'IndexController@index')->name('admin.indices.index');
    Route::get('/create', 'IndexController@create')->name('admin.indices.create');
    Route::post('/', 'IndexController@store')->name('admin.indices.store');
    Route::get('/{index}', 'IndexController@show')->name('admin.indices.read');
    Route::get('/edit/{index}', 'IndexController@edit')->name('admin.indices.edit');
    Route::put('/{index}', 'IndexController@update')->name('admin.indices.update');
    Route::delete('/{index}', 'IndexController@destroy')->name('admin.indices.delete');
});
