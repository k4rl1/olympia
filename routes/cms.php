<?php

Route::group(['prefix' => 'tickertext'], function () {
    Route::get('/create', 'TickerTextController@create')->name("createTickerText");
    Route::post('/save', 'TickerTextController@save')->name("saveTickerText");

    Route::get('/list', 'TickerTextController@listTickerText')->name("listTickerText");
});

