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


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::get('/', function () {
	   return view('layouts.principal');
	});

	Route::get('/home', 'HomeController@index')->name('home');


	Route::group(['prefix' => 'admin'], function() {
		//rutas de usuarios
	    Route::resource('user', 'UsersController');

	    //rutas de las aulas
	     Route::resource('aulas', 'AulasController');
	});

    

    
});

