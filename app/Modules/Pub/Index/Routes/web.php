<?php

Route::group([ 'middleware' => ['local']], function () {
    Route::get('/', 'IndexController@index')->name('indices.index');
    Route::get('/create', 'IndexController@create')->name('indices.create');
//    Route::post('/', 'IndexController@store')->name('indices.store');
    Route::get('/{index}', 'IndexController@show')->name('indices.read');
    Route::get('/edit/{index}', 'IndexController@edit')->name('indices.edit');
    Route::put('/{index}', 'IndexController@update')->name('indices.update');
    Route::delete('/{index}', 'IndexController@destroy')->name('indices.delete');

    Route::put('/', 'IndexController@subscribingUser')->name('indices.subscribe');

});
