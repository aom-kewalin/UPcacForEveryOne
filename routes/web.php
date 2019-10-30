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



Route::resource('/', 'IndexController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/driver/registercar', 'DriverController@registercar');

Route::resource('/driver', 'DriverController');

Route::get('/event-up', function () {
    return view('Event-up.event_up');
});
Route::get('/getdata', 'TravelController@Getdata');

