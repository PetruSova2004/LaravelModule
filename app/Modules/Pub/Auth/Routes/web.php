<?php

Route::group(['prefix' => 'auths', 'middleware' => ['guest']], function () {
    Route::get('/', 'AuthController@index')->name('auths.index');
    Route::post('/', 'AuthController@store')->name('auths.store');
});

Route::group(['prefix' => '', 'middleware' => ['auth']], function () {
    Route::get('/logout', 'AuthController@logout')->name('logout');
});


