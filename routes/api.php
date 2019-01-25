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
    Route::prefix('v1')->group(function () {
        Route::get('/login', 'Auth\LoginController@redirectToProvider')->name('login');
        Route::get('/callback', 'Auth\LoginController@handleProviderCallback')->name('callback');
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

        /*
        | User routes
        */

        Route::prefix('users')->group(function () {
            Route::get('current', 'UserController@getCurrentUser')->name('user_current');
            // only admins for all routes
            Route::get('/', 'UserController@getUsers')->name('users');
            Route::get('{id}', 'UserController@getUser')->name('user');
            Route::get('vk/{id}', 'UserController@getUserByVKId')->name('user_by_vk_id');
        });

        /*
        | Dorm routes
        */

        Route::prefix('dorms')->group(function () {
            Route::get('/', 'DormController@getDorms')->name('get_dorms');
            Route::get('{id}', 'DormController@getDorm')->name('get_dorm');
            Route::get('{id}/floors', 'DormController@getDormFloors')->name('get_dorm_floors');
            Route::get('{id}/floors/{number}', 'DormController@getDormFloor')->name('get_dorm_floor');
            Route::get('{id}/floors/{number}/rooms', 'DormController@getDormFloorRooms')->name('get_dorm_floor_rooms');
        });

        /*
        | Floor routes
        */

        Route::prefix('floors')->group(function () {
            Route::get('/', 'FloorController@getFloors')->name('get_floors');
            Route::get('{id}', 'FloorController@getFloor')->name('get_floor');
            Route::get('{id}/rooms', 'FloorController@getFloorRooms')->name('get_floor_rooms');
        });

        /*
        | Room routes
        */

        Route::prefix('rooms')->group(function () {
            Route::get('/', 'RoomController@getRooms')->name('get_rooms');
            Route::get('{id}', 'RoomController@getRoom')->name('get_room');
        });
    });
});
