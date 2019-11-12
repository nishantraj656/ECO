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
    Route::post('/ethiopian','EthiopianController@create')->name('ethiopian');
    Route::post('/payment', 'PaymentController@create')->name('payment');
    Route::post('/legel','LegalizationController@create')->name('legel');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/passport', 'PassportController@index')->name('Passport');
    Route::post('/passport', 'PassportController@index')->name('Passport');
    Route::get('/visa', 'VisaController@index')->name('visa');
    Route::get('/shedule', 'SheduleController@index')->name('shrdule');
    Route::post('/services/get', 'ServicesController@checkType')->name('getform');
    Route::get('/services', function(){
        return view('Admin.users.services');
    })->name('services');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/users', 'UsersController@index')->name('listall_users');
    
});

