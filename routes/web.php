<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','HomePageController@index');
Route::get('/login','LoginController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/','AdminController@dashboard')->name('Dashboard');
    Route::get('category','CategoryController@category')->name('Category');
});

Route::prefix('admin/category')->group(function(){
   Route::get('add','CategoryController@addCategory')->name('Add');
   Route::POST('create','CategoryController@create')->name('Create');
});