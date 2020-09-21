<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


//RUTAS DE SUBMODULO EMPRESAS
Route::get('empresas/agregar', 'EmpresaController@agregar');
Route::post('/empresas', 'EmpresaController@guardar');

Route::get('/empresas', 'EmpresaController@index');
Route::get('/empresas/{empresa}', 'EmpresaController@mostrar');

Route::get('/empresas/{empresa}/editar', 'EmpresaController@editar');
Route::put('/empresas/{empresa}', 'EmpresaController@actualizar');

Route::get('/empresas/{empresa}/eliminar', 'EmpresaController@eliminar');
Route::delete('/empresas/{empresa}', 'EmpresaController@destruir');


//RUTAS DE SUBMÓDULO 
Route::get('/citas/{empresa}/agregar', 'CitaController@agregar');
Route::post('/citas', 'CitaController@guardar');

Route::get('/citas', 'CitaController@index');
Route::get('/citas/{cita}', 'CitaController@mostrar');

Route::get('/citas/{cita}/editar', 'CitaController@editar');
Route::put('/citas/{cita}', 'CitaController@actualizar');

Route::get('/citas/{cita}/eliminar', 'CitaController@eliminar');
Route::delete('/citas/{cita}', 'CitaController@destruir');


//RUTAS POR DEFECTO
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
