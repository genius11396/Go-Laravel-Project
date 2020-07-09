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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index','backend\BackendController@index')->name('index');



//SLN


Route::get('searchresult','frontend\ResultController@resultpage')->name('result');


Route::get('driverregister','frontend\DriverController@store')->name('driverregister');
Route::get('driverregister','frontend\DriverController@store')->name('driverregister');

Route::get('driverform','frontend\DriverController@create')->name('driverform');
Route::get('indexdriver','frontend\DriverController@index')->name('indexdriver');

Route::get('policy','frontend\DriverController@policy')->name('policy');


Route::post('citybydivision','frontend\DriverController@citybydivision')->name('citybydivision');
Route::resource('driverindex','frontend\DriverindexController');


//------------------

// NPS

Route::get('/searchdriverdetail/{id}','frontend\CustomerController@details')->name('customer.details');
Route::get('/','frontend\CustomerController@index')->name('home');
Route::post('/fetch','frontend\CustomerController@fetch')->name('customer.fetch');
Route::post('/dropfetch','frontend\CustomerController@dropfetch')->name('customer.dropfetch');
Route::post('/searchdriver','frontend\CustomerController@searchdriver')->name('customer.searchdriver');

//--------

Route::resource('city','backend\CityController');

Route::get('dashboard','backend\BackendController@index')->name('dashboard');
Route::post('requestorder','frontend\OrderController@requestorder')->name('order.requestorder');


//----
Auth::routes();


