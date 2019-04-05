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
//gruppo di rotte amministrative con resource per la parte amministrativa degli eventi admin
Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function(){
  Route::resource('/','EventController');
  Route::get('evento/crea_evento','EventController@create')->name('creaEvento');
  Route::get('evento/modifica_evento/{id}','EventController@edit')->name('modificaEvento');
  Route::get('/update_evento/{id}','EventController@update')->name('updateEvento');
  Route::delete('/destroy_evento/{id}','EventController@destroy')->name('cancellaEvento');
});
//gruppo di rotte amministrative con resource per la parte amministrativa dei locali admin
Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function(){
  Route::get('locale/crea_locale','LocalController@create')->name('creaLocale');
  Route::post('locale/salva_locale','LocalController@store')->name('salvaLocale');
});
