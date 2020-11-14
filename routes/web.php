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
Route::get('/home','App\Http\Controllers\HomeController@home')->name('home')->middleware('Check');;
Route::get('/about','App\Http\Controllers\HomeController@about')->name('about')->middleware('Check');;
Route::get('/new','App\Http\Controllers\HomeController@new')->name('new');


//test//
Route::get('ajax-form-submit', 'App\Http\Controllers\HomeController@index');
Route::post('save-form', 'App\Http\Controllers\HomeController@store');

//


Route::get('/updateuser','App\Http\Controllers\HomeController@After')->name('After');
Route::get('/home/delete/{id}', 'App\Http\Controllers\HomeController@delete');

Route::post('updatePost', 'App\Http\Controllers\HomeController@updatePost');



Route::post('getID', 'App\Http\Controllers\HomeController@getID');


Route::post('someurl', 'App\Http\Controllers\HomeController@someMethod');



Route::get('login/facebook', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('bcfacebook');
//Route::get('/now','App\Http\Controllers\HomeController@show')->name('now');

