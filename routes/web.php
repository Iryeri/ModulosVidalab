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

Route::get('/', function () {
    return view('welcome');
});

//RUTAS DE SUBMODULO EMPRESAS
Route::get('/empresas', 'EmpresaController@index');
Route::get('/empresas/{empresa}', 'EmpresaController@mostrar');
Route::get('/empresas/agregar', 'EmpresaController@agregar');
Route::post('/empresas', 'EmpresaController@guardar');
Route::get('/empresas/{empresa}/editar', 'EmpresaController@editar');
Route::put('/empresas/{empresa}', 'EmpresaController@actualizar');
Route::get('/empresas/{empresa}/eliminar', 'EmpresaController@eliminar');
Route::delete('/empresas/{empresa}', 'EmpresaController@destruir');

//RUTAS DE SUBMÓDULO ATENCIONES
Route::get('/citas', 'CitaController@index');
Route::get('/citas/{cita}', 'CitaController@mostrar');
Route::get('/citas/{cita}/editar', 'CitaController@editar');
Route::put('/citas/{cita}', 'CitaController@actualizar');
Route::get('/citas/{cita}/eliminar', 'CitaController@eliminar');
Route::delete('/citas/{cita}', 'CitaController@destruir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
