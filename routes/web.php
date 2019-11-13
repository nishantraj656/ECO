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
Route::get('/','IndexController@index');
Route::get('/index', 'IndexController@index')->name('index');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/contectUs', 'ContactController@create')->name('contactUs');
// example of sub page path route
Route::get('/contact/index', 'ContactController@index')->name('home');

    //Route::get('/admin/users', 'UsersController@index')->name('listall_users');
  

Route::group(['middleware' => 'auth'], function () {

    /*
    |------------------------------------------------------------------------------
    |  User List in Admin Dashboard
    |------------------------------------------------------------------------------
    */

    Route::get('/admin/users', 'UsersController@index')->name('listall_users');
    Route::get('/admin/users/deactive', 'UsersController@update');

    /*
    |------------------------------------------------------------------------------
    |  VIew individual data Admin Dashboard
    |------------------------------------------------------------------------------
    */
    
    Route::get('/view','ViewController@index')->name('viewData');
    Route::get('/updateViewData','ViewController@update')->name('updateViewData');

    /*
    |------------------------------------------------------------------------------
    |   Dashboard url for User and Admin 
    |------------------------------------------------------------------------------
    */

    Route::get('/home', 'HomeController@index')->name('home');

    /*
    |------------------------------------------------------------------------------
    |  User Service url    
    |------------------------------------------------------------------------------
    */

    Route::post('/ethiopian','EthiopianController@create')->name('ethiopian');
    
    Route::get('/paymentShow', function(){
            return view('Admin.users.Payment');
    })->name('paymentShow');

    Route::post('/payment', 'PaymentController@create')->name('payment');
    Route::post('/legel','LegalizationController@create')->name('legel');
    Route::get('/passport', 'PassportController@index')->name('Passport');
    Route::post('/passportAdd', 'PassportController@create')->name('passportAdd');
    Route::get('/visa', 'VisaController@index')->name('visa');
    Route::post('/visaAdd', 'VisaController@create')->name('visaAdd');
    Route::get('/shedule', 'SheduleController@index')->name('shrdule');
    Route::post('/sheduleAdd', 'SheduleController@create')->name('sheduleAdd');
    Route::post('/services/get', 'ServicesController@checkType')->name('getform');
    Route::get('/services', function(){
        return view('Admin.users.services');
    })->name('services');

    Route::get('current','IndexController@currentApplicationList');
   
});

