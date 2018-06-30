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
 // ini  route nya view nya
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','SensorController@weather');

Route::get('/charts', 'SensorController@index')->name('charts');
Route::get('/charts/chart', 'SensorController@chart')->name('charts');
Route::get('/table', 'SensorController@table')->name('table');
Route::post('/parsing','SensorController@parsing')->name('parsing');
// Route::get('/weather', 'SensorController@weather')->name('weather');

// coba jalanin
// di view ada ke edit ?

Auth::routes();

Route::get('/home', 'SensorController@loginAdmin')->name('home');

