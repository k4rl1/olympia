<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(["prefix" => "tickertext"], function () {
    Route::get('/conference', '\App\Http\Controllers\Api\TickerTextController@conference');
    Route::get('/{sportId}', '\App\Http\Controllers\Api\TickerTextController@get');
});
