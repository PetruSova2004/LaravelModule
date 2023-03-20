<?php

Route::group(['prefix' => 'currencies', 'middleware' => []], function () {
    Route::get('/', 'CurrencyController@eur')->name('currencies.eur');
    Route::get('/usd', 'CurrencyController@usd')->name('currencies.usd');
});
