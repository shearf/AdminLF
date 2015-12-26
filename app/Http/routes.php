<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', ['as' => 'admin.login', 'uses' => 'Admin\AuthController@login']);

Route::post('admin/auth', ['as' => 'admin.auth', 'uses' => 'Admin\AuthController@auth']);

Route::get('admin/logout', ['as' => 'admin.logout', 'uses' => 'Admin\AuthController@logout']);

Route::group(['prefix' => 'admin', 'middleware' => 'admin.auth'], function() {

    Route::get('/', ['as' => 'admin.main', 'uses' => 'Admin\ConsoleController@index']);

    Route::resource('user', 'Admin\UserController');

});



