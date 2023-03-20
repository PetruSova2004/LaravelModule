<?php

Route::group(['prefix' => 'localizations', 'middleware' => []], function () {
    Route::get('/', 'Api\LocalizationController@index')->name('api.localizations.index');
    Route::post('/', 'Api\LocalizationController@store')->name('api.localizations.store');
    Route::get('/{localization}', 'Api\LocalizationController@show')->name('api.localizations.read');
    Route::put('/{localization}', 'Api\LocalizationController@update')->name('api.localizations.update');
    Route::delete('/{localization}', 'Api\LocalizationController@destroy')->name('api.localizations.delete');
});