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
//Route::get('/', 'App\Http\Controllers\PagesController@main');

Route::get('/Welcome', 'App\Http\Controllers\PagesController@Welcome');

Route::get('/Aktobe', 'App\Http\Controllers\PagesController@Aktobe');

Route::get('/Nur-sultan', 'App\Http\Controllers\PagesController@Nur-sultan');

Route::get('/Almaty', 'App\Http\Controllers\PagesController@Almaty');

Route::get('/Sharyn', 'App\Http\Controllers\PagesController@Sharyn');

Route::get('/Turkestan', 'App\Http\Controllers\PagesController@Turkestan');

//Route::get('/travel', 'App\Http\Controllers\PagesController@travel');

//Route::get('/rg', 'App\Http\Controllers\PagesController@rg');

Route::get('/rg', [App\Http\Controllers\UserController::class, 'create']);

Route::get('/sn', [App\Http\Controllers\UserController::class, 'create']);

//Route::get('/sn', 'App\Http\Controllers\PagesController@sn');

Route::get('/Help', 'App\Http\Controllers\PagesController@Help');

Route::get('/Shop', 'App\Http\Controllers\PagesController@Shop');

Route::get('/p1Almaty', 'App\Http\Controllers\PagesController@p1Almaty');

Route::get('Services', 'App\Http\Controllers\PagesController@sn');


//? recreate the sample by the other thinks
