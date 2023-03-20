<?php

Route::group(['prefix' => 'registers', 'middleware' => ['guest']], function () {
    Route::get('/', 'RegisterController@index')->name('registers.index');
    Route::post('/', 'RegisterController@store')->name('registers.store');
});
