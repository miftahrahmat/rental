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

Auth::routes();

Route::get('rental', array('as'=>'admin','before' => 'check', 'uses' => 'BaseController@dashBoard'));

Route::get('choosecar', array('as' => 'choosecar', 'uses' => 'BaseController@getCar'));

Route::post('rental', 'FrontController@loc')->name('loc');
    Route::resource('car', 'CarController');
    Route::resource('reservation', 'ReservationController');



