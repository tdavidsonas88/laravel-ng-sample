<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/quote', [
    'uses' => 'App\Http\Controllers\QuoteController@postQuote'
]);

Route::get('/quotes', [
    'uses' => 'App\Http\Controllers\QuoteController@getQuotes'
]);

Route::put('/quote/{id}', [
    'uses' => 'App\Http\Controllers\QuoteController@putQuote'
]);

Route::delete('/quote/{id}', [
    'uses' => 'App\Http\Controllers\QuoteController@deleteQuote'
]);
