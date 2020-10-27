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
Route::group(['prefix'=>'proyecto/usuarios'], function(){
    Route::get('formulario', 'controllerUsuarios@index');//formulario de registro de usuarios
    Route::post('registro', 'controllerUsuarios@store');//registro de usuarios
    Route::get('lista', 'controllerUsuarios@list');//listado de registro
    Route::delete('eliminar/{id}', 'controllerUsuarios@destroy')->name('delete');
});
Route::group(['prefix'=>'proyecto/doctores'], function(){
    Route::get('formulario', 'controllerDoctores@index');//formulario de registro de usuarios
    Route::post('registro', 'controllerDoctores@store');//registro de usuarios
    Route::get('lista', 'controllerDoctores@list');//listado de registro
    Route::delete('eliminar/{id}', 'controllerUsuarios@destroy')->name('eliminar');
});   
Route::group(['prefix'=>'practica'], function(){
    Route::get('formulario', function () {return view('practica');}); //Formato de registro
    Route::post('formato', 'controllerPracticas@store'); //registro de datos    
    Route::get('lista', 'controllerPracticas@list'); //listado de registros
    Route::delete('eliminar/{id}', 'controllerPracticas@destroy')->name('delete'); //delete de un registro
        
});    





?>

