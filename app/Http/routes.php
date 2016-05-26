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

Route::auth();

Route::get('/home', 'HomeController@index');

/*
 * Admin Router Group
 */
Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function () {

    Route::get('/', 'AdminController@index');

    Route::get('user/profile', 'UserController@profile');

    Route::group(['prefix'=>'user'],function (){
        Route::get('list',['as'=>'ListUser','uses'=>'UserController@ListUser']);

        Route::get('edit/{id}',['as'=>'EditUser','uses'=>'UserController@EditUser']);
        Route::POST('update/{id}',['as'=>'UpdateUser','uses'=>'UserController@UpdateUser']);


        Route::get('delete/{id}',['as'=>'admin.user.DeleteUser','uses'=>'UserController@DeleteUser']);

        Route::get('add',['as'=>'AddgUser','uses'=>'UserController@AddgUser']);
        Route::post('add',['as'=>'AddUser','uses'=>'UserController@AddUser']);
    });

    Route::group(['prefix'=>'category'],function (){

        Route::get('all',['as'=>'AllCategory','uses'=>'CategoryController@AllCategory']);

        Route::get('add',['as'=>'AddCategory','uses'=>'CategoryController@AddCategory']);
        Route::post('add',['as'=>'PostCategory','uses'=>'CategoryController@PostCategory']);


        Route::get('edit/{id}',['as'=>'EditCategory','uses'=>'CategoryController@EditCategory']);
        Route::POST('update/{id}',['as'=>'UpdateCategory','uses'=>'CategoryController@UpdateCategory']);


        Route::get('delete/{id}',['as'=>'admin.category.DeleteCategory','uses'=>'CategoryController@DeleteCategory']);
    });

    Route::group(['prefix'=>'posts'],function (){

        Route::get('all',['as'=>'AllPosts','uses'=>'PostController@AllPosts']);


        Route::get('add',['as'=>'AddgPosts','uses'=>'PostController@AddgPosts']);
        Route::post('add',['as'=>'AddPosts','uses'=>'PostController@AddPosts']);


        Route::get('edit/{id}',['as'=>'EditPosts','uses'=>'PostController@EditPosts']);
        Route::POST('update/{id}',['as'=>'UpdatePosts','uses'=>'PostController@UpdatePosts']);

        // xu lý delete all và editall
        Route::post('delete/{id}',['as'=>'DeletePosts','uses'=>'PostController@DeletePosts']);

        Route::get('deleteall',['as'=>'DeleteAllPosts','uses'=>'PostController@DeleteAllPosts']);
        Route::post('deleteall',['as'=>'DeleteAllPosts','uses'=>'PostController@DeleteAllPosts']);


    });




});

