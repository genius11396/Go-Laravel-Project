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




Route::get('searchresult','frontend\ResultController@resultpage')->name('result');
Route::get('searchdetail','frontend\DetailController@detailpage')->name('detail');


Route::get('driverorder',function(){
	return view('frontend.driver.index_order');
});
Route::get('driverregister',function(){
	return view('frontend.driver.driver_register');
});
Route::get('policy',function(){
	return view('frontend.driver.policy');
});

// NPS

Route::get('/','frontend\CustomerController@index')->name('home');
Route::post('/fetch','frontend\CustomerController@fetch')->name('customer.fetch');
Route::post('/dropfetch','frontend\CustomerController@dropfetch')->name('customer.dropfetch');
Route::resource('city','backend\CityController');

Route::get('dashboard','backend\BackendController@index')->name('dashboard');
