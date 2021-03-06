<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middlware' => ['auth']], function () {
    Route::resource('/category', 'ControllerCategory', ['as'=>'admin']);
    Route::resource('/post', 'PostController', ['as'=>'admin']);
    Route::get('/', 'Index\IndexAdminController@index_admin');
    Route::get('/id{id}', 'Index\IndexAdminController@index_admin_category')->name('id');
    Route::resource('/comments', 'CommentsController', ['as'=>'admin']);

});




