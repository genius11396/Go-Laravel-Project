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


Route::get('/','frontend\CustomerController@index')->name('home');
Route::get('searchresult','frontend\ResultController@resultpage')->name('result');
Route::get('searchdetail','frontend\DetailController@detailpage')->name('detail');
