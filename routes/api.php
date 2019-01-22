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

Route::group(['middleware' => ['web']], function () {
    Route::get('/login', 'Auth\LoginController@redirectToProvider')->name('login');
    Route::get('/callback', 'Auth\LoginController@handleProviderCallback')->name('callback');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});
