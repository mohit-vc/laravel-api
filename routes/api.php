<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\User;
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


Route::group(['namespace' => 'API'], function () {
    // Api's only access for guest user
    Route::group(['namespace' => 'Auth','prefix' => 'auth'], function () {
        Route::post('login', 'AuthenticateController@login');
    });

    // api after login
    Route::group(['middleware' => 'auth:api'], function() {

        Route::group(['namespace' => 'Auth','prefix' => 'auth'], function () {
            Route::get('logout', 'AuthenticateController@logout');
        });

        Route::resource('books', 'BookController');

     });
});
