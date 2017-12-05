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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//post Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('post','\App\Http\Controllers\PostController');
  Route::post('post/{id}/update','\App\Http\Controllers\PostController@update');
  Route::get('post/{id}/delete','\App\Http\Controllers\PostController@destroy');
  Route::get('post/{id}/deleteMsg','\App\Http\Controllers\PostController@DeleteMsg');
});


Auth::routes();

Route::get('/home', 'HomeController@index');