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

//Route::get('/', function () {
//    return view('welcome')->name('welcome');
//});



Auth::routes();
Route::get('/','App\Http\Controllers\Controller@welcome')->name('welcome');
Route::get('/home','App\Http\Controllers\HomeController@home')->name('home');
Route::get('/about','App\Http\Controllers\HomeController@about')->name('about');



Route::post('someurl', 'App\Http\Controllers\HomeController@someMethod');



Route::get('login/facebook', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('bcfacebook');
//Route::get('/now','App\Http\Controllers\HomeController@show')->name('now');

