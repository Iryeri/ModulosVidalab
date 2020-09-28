<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//RUTAS DEL CATALOGO
Route::get('/catalogos', 'CatalogoController@index');


//RUTAS DE SUBMÓDULO PAQUETES
Route::get('/paquetes/agregar', 'PaqueteController@agregar');
Route::post('/paquetes', 'PaqueteController@guardar');

Route::get('/paquetes', 'PaqueteController@index');
Route::get('/paquetes/{paquete}', 'PaqueteController@mostrar');

Route::get('/paquetes/{paquete}/editar', 'PaqueteController@editar');
Route::put('/paquetes/{paquete}', 'PaqueteController@actualizar');

Route::get('/paquetes/{paquete}/eliminar', 'PaqueteController@eliminar');
Route::delete('/paquetes/{paquete}', 'PaqueteController@destruir');


//RUTAS DE SUBMÓDULO PRUEBAS
Route::get('/pruebas/agregar', 'PruebaController@agregar');
Route::post('/pruebas', 'PruebaController@guardar');

Route::get('/pruebas', 'PruebaController@index');
Route::get('/pruebas/{prueba}', 'PruebaController@mostrar');

Route::get('/pruebas/{prueba}/editar', 'PruebaController@editar');
Route::put('/pruebas/{prueba}', 'PruebaController@actualizar');

Route::get('/pruebas/{prueba}/eliminar', 'PruebaController@eliminar');
Route::delete('/pruebas/{prueba}', 'PruebaController@destruir');


//RUTAS DE SUBMODULO EMPRESAS
Route::get('/empresas/agregar', 'EmpresaController@agregar');
Route::post('/empresas', 'EmpresaController@guardar');

Route::get('/empresas', 'EmpresaController@index');
Route::get('/empresas/{empresa}', 'EmpresaController@mostrar');

Route::get('/empresas/{empresa}/editar', 'EmpresaController@editar');
Route::put('/empresas/{empresa}', 'EmpresaController@actualizar');

Route::get('/empresas/{empresa}/eliminar', 'EmpresaController@eliminar');
Route::delete('/empresas/{empresa}', 'EmpresaController@destruir');


//RUTAS DE SUBMÓDULO CITAS
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
