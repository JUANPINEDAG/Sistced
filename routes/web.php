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
	
	Route::get('editar_cuenta', [
    	'as' => 'usuario.edit',
    	'uses' => 'HomeController@edit'
    ]);

    Route::put('users/{id}/update', [
    	'as' => 'usuario.update',
	    'uses' => 'HomeController@update'
	]);

    //Rutas de usuarios
	   Route::resource('users', 'UsersController');
	   Route::get('users/{id}/destroy', [
	    'as' => 'admin.users.destroy',
	    'uses' => 'UsersController@destroy'
	]);

	    //rutas de las aulas
	     Route::resource('aulas', 'AulasController');
	     Route::get('aulas/{id}/destroy', [
	    'as' => 'admin.aulas.destroy',
	    'uses' => 'AulasController@destroy'
	]);

	//Rutas Periodo Academico
	Route::resource('periodos_academicos', 'Periodos_AcademicosController');
	     Route::get('aulas/{id}/destroy', [
	    'as' => 'admin.periodos_academicos.destroy',
	    'uses' => 'Periodos_AcademicosController@destroy'
	]);
    
});

