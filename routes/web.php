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

Route::get('/', 'HomeController@index');

Route::get('/booking/{room}', 'HomeController@show');

Route::get('/reserve', 'MailController@send');

Route::get('/search', 'RoomsController@search');

Route::get('/rooms', 'RoomsController@index');

Route::get('/reservation', 'RoomsController@reserve');

Route::get('/about', 'HomeController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/management', 'ManagementController@index');

Route::get('/management/rooms', 'ManagementController@rooms');

Route::get('/management/addroom', 'ManagementController@addroom');

Route::post('/management/addroompost', 'ManagementController@roomadded');

Route::get('/management/deleteroom/{id}', 'ManagementController@deleteroom');

Route::post('/management/deleteroompost', 'ManagementController@roomdeleted');

Route::get('/management/updateroom/{id}', 'ManagementController@updateroom');

Route::post('/management/updateroompost', 'ManagementController@roomupdated');

Route::get('/management/food', 'ManagementController@food');

Route::get('/management/addfood', 'ManagementController@addfood');

Route::post('/management/addfoodpost', 'ManagementController@foodadded');

Route::get('/management/deletefood/{id}', 'ManagementController@deletefood');

Route::post('/management/deletefoodpost', 'ManagementController@fooddeleted');

Route::get('/management/updatefood/{id}', 'ManagementController@updatefood');

Route::post('/management/updatefoodpost', 'ManagementController@foodupdated');

Route::get('/management/deletebooking/{id}', 'ManagementController@deletebooking');

Route::post('/management/deletebookingpost', 'ManagementController@bookingdeleted');

