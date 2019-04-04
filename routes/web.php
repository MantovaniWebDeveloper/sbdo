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
//rotta per la parte pubblica home
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('event','EventController');
Route::get('/eventi','EventController@search')->name('ricercaEventi');
//gruppo di rotte amministrative con resource per la parte amministrativa admin
Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function(){
  Route::resource('/','EventController');
  Route::get('/crea_evento','EventController@create')->name('creaEvento');
});
