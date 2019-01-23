<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    Route::prefix('user')->group(function () {
        Route::get('info', 'UserController@getUserInfo')->name('user_info');
    });

    Route::prefix('dorm')->group(function () {
        Route::get('list', 'DormController@getDormsList')->name('dorm_list');
    });
});
