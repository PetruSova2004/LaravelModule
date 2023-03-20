<?php

Route::group(['prefix' => 'localizations', 'middleware' => ['local']], function () {
    Route::get('/{locale}', 'LocalizationController@index')->name('localizations.index');

});
