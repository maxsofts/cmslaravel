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
Route::get('home',"HomeController@index" );

Route::auth();

/*
 * Admin Router Group
 */
Route::group(['prefix' => 'admin' , 'middleware' => 'auth', 'middleware' => 'permission'], function () {

    Route::get('/', 'AdminController@index');

    Route::get('user/profile', 'UserController@profile');
});