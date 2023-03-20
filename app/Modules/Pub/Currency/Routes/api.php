<?php

Route::group(['prefix' => 'currencies', 'middleware' => []], function () {
    Route::get('/', 'Api\CurrencyController@index')->name('api.currencies.index');
    Route::post('/', 'Api\CurrencyController@store')->name('api.currencies.store');
    Route::get('/{currency}', 'Api\CurrencyController@show')->name('api.currencies.read');
    Route::put('/{currency}', 'Api\CurrencyController@update')->name('api.currencies.update');
    Route::delete('/{currency}', 'Api\CurrencyController@destroy')->name('api.currencies.delete');
});