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
	     Route::get('periodos_academicos/{id}/destroy', [
	    'as' => 'admin.periodos_academicos.destroy',
	    'uses' => 'Periodos_AcademicosController@destroy'
	]);

	//Empleados
	Route::resource('empleados', 'EmpleadosController');
	     Route::get('empleados/{id}/destroy', [
	    'as' => 'admin.empleados.destroy',
	    'uses' => 'EmpleadosController@destroy'
	]);

	//Estudiantes
	Route::resource('estudiantes', 'EstudiantesController');
	     Route::get('estudiantes/{id}/destroy', [
	    'as' => 'admin.estudiantes.destroy',
	    'uses' => 'EstudiantesController@destroy'
	]);

	//deudas_estudiantiles
    Route::resource('deudas_estudiantiles', 'Deudas_EstudiantesController');
	     Route::get('deudas_estudiantiles/{id}/destroy', [
	    'as' => 'admin.deudas_estudiantiles.destroy',
	    'uses' => 'Deudas_EstudiantesController@destroy'
	]);

	//materiales_Gastables
    Route::resource('materiales_gastables', 'Materiales_GastablesController');
	     Route::get('materiales_gastables/{id}/destroy', [
	    'as' => 'admin.materiales_gastables.destroy',
	    'uses' => 'Materiales_GastablesController@destroy'
	]);
});

