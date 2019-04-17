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


Auth::routes(['register' => false]);




Route::resource('event','EventController');
Route::get('/eventi','EventController@search')->name('ricercaEventi');
//gruppo di rotte amministrative con resource per la parte amministrativa degli eventi admin
Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function(){
  Route::resource('/','EventController');
  Route::get('evento/crea_evento','EventController@create')->name('creaEvento');
  Route::get('evento/modifica_evento/{id}','EventController@edit')->name('modificaEvento');
  Route::post('evento/update_evento/{id}','EventController@update')->name('updateEvento');
  Route::delete('/destroy_evento/{id}','EventController@destroy')->name('cancellaEvento');
});
//gruppo di rotte amministrative con resource per la parte amministrativa dei locali admin
Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function(){

  Route::get('locale/crea_locale','LocalController@create')->name('creaLocale');
  Route::get('locale/listaLocali','LocalController@index')->name('listaLocali');
  Route::post('locale/salva_locale','LocalController@store')->name('salvaLocale');
});

Route::options('/{path}', function(){
    return '';
})->where('path', '.*');
