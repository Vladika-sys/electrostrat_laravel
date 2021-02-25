<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;


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
// MAIN PAGES
Route::get('/','App\Http\Controllers\IndexController@mainpage');
Route::get('/services/{slug}','App\Http\Controllers\ServicesController@showMore');
Route::get('/services','App\Http\Controllers\ServicesController@services');
Route::post('/contacts/submit', 'App\Http\Controllers\ContactsController@save');
Route::get('/contacts','App\Http\Controllers\ContactsController@contacts')->name('contacts');
Route::post('/about/submit', 'App\Http\Controllers\FeedbacksController@save');
Route::get('/about','App\Http\Controllers\AboutController@about');
// EN
// LOG IN/REGISTER
Route::get('/login','App\Http\Controllers\UserAuthController@login')->middleware('AlreadyLoggedIn');
Route::get('/register','App\Http\Controllers\UserAuthController@register')->middleware('AlreadyLoggedIn');
Route::post('/create','App\Http\Controllers\UserAuthController@newUser')->name('auth.create');
Route::post('/check','App\Http\Controllers\UserAuthController@verify')->name('auth.check');
Route::get('/logout','App\Http\Controllers\UserAuthController@logout');
Route::get('/dashboard','App\Http\Controllers\DashboardController@dashboard')->middleware('isLogged');
// END
// CRUD Routes
Route::post('/services/{id}/edit','App\Http\Controllers\DashboardController@edit');
Route::post('/services/{id}/delete','App\Http\Controllers\DashboardController@delete');
Route::post('/feedback/{id}/edit','App\Http\Controllers\DashboardController@feedback_edit');
Route::post('/orders/{id}/edit','App\Http\Controllers\DashboardController@order_edit');
Route::post('/dashboard/submit','App\Http\Controllers\DashboardController@save');
// END

