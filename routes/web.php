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

/*
|------------------------------------------------------------------------------
| Landing Page 
|------------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', function () {
    return view('index');
});


Route::get('/index', 'IndexController@index')->name('index');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
// example of sub page path route
Route::get('/contact/index', 'ContactController@index')->name('home');

    //Route::get('/admin/users', 'UsersController@index')->name('listall_users');
    Route::get('/data','dataController@index')->name('data');
    Route::get('/adminhome', 'AdminhomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/users', 'UsersController@index')->name('listall_users');
    
});