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

Route::get('/', function () { return view('welcome'); });
Route::get('registro', function() { return view('registro'); })->name('register');
Route::name('registrarusu')->post('registrarusu/', 'SystemController@storeusu');
Route::name('login')->get('login', function() { return view('login'); });
Route::name('validar')->post('validar/', 'LoginController@validar');
Route::name('logout')->get('logout', 'LoginController@logout');
Route::name('doctores')->get('doctores/', 'SystemController@doctores');
Route::name('emergencias')->get('emergencias/', 'SystemController@emergencias');
//Route::name('usuarios')->get('usuarios/', 'AdminController@list');

//--------------------Emergencias-------------------



Route::group(['prefix' => 'emergenciass'], function(){    
    Route::patch('usuariosupdate/{id}', 'AdminController@updateusu')->name('usuariosupdate');
    Route::delete('usuariosdelete/{id}', 'AdminController@destroyusu');
    Route::delete('emerdelele/{id}', 'AdminController@destroyemer');
});

//---------------------------- Usuario ----------------
Route::prefix('usuario')->group(function () {
    Route::get('perfil', 'UsuariosController@perfil');
    Route::get('modificar/{id}', 'UsuariosController@editusu');
    Route::patch('usuarioupd/{id}', 'UsuariosController@updusu');

    Route::get('doctores/', 'UsuariosController@docs');
    Route::name('js02')->get('js02/', 'JqueryController@js02');
    Route::name('citas')->get('citas/{id}', 'UsuariosController@datosd');
    Route::name('registrocita')->post('registrocita', 'UsuariosController@registrocita');
    Route::name('historial')->get('historial/{id}', 'UsuariosController@historial');
    Route::get('modificar_cita/{id}', 'UsuariosController@modificarc');
    Route::patch('updatec/{id}', 'UsuariosController@updcita');

    Route::get('emergencias/', 'UsuariosController@emer');        
});
Route::prefix('admin')->group(function () {
    Route::get('perfil', 'AdminController@perfil')->name('perfil');
    Route::get('modificar/{id}', 'AdminController@editusu');
    Route::patch('usuarioupd/{id}', 'AdminController@updusu');
    Route::name('usuarios')->get('usuarios/', 'AdminController@usuarios');
    Route::get('usuariosedit/{id}', 'AdminController@editu');    
    Route::patch('usuariosupdate/{id}', 'AdminController@updateusu');
    Route::delete('usuariosdelete/{id}', 'AdminController@destroyusu');

    Route::get('doctores/', 'AdminController@doctores');
    Route::name('js01')->get('js01/', 'JqueryController@js01');
    Route::get('citas/{id}', 'AdminController@datosd');
    Route::get('historial/{id}', 'AdminController@historial');
    Route::post('registrocita', 'AdminController@registrocita');
    Route::get('modificar_cita/{id}', 'AdminController@modificarc');
    Route::patch('updatec/{id}', 'AdminController@updcita');
    
    Route::get('registro', 'AdminController@registro');
    Route::post('registrar', 'AdminController@storeusu');
    Route::name('formulario_emer')->get('formulario_emer/', 'AdminController@former');
    Route::name('registraremer')->post('registraremer/', 'AdminController@storemer');
    Route::get('emergencias/', 'AdminController@emergencias');
    Route::get('emergenciasedit/{id}', 'AdminController@edite');
    Route::patch('emergenciasupdate/{id}', 'AdminController@updateme')->name('emergenciasupdate');
    Route::delete('emerdelele/{id}', 'AdminController@destroyemer');    
});


Route::prefix('medico')->group(function () {
    Route::get('perfil', 'MedicosController@perfil');
    Route::get('modificar/{id}', 'MedicosController@editmed');
    Route::patch('update/{id}', 'MedicosController@updmed');

    Route::get('emergencias', 'MedicosController@emer');

    Route::get('doctores/', 'MedicosController@docs');    
    Route::name('js03')->get('js03/', 'JqueryController@js03');

    Route::get('citas/{id}', 'MedicosController@datosd');
    Route::name('registrocita')->post('registrocita', 'MedicosController@registrocita');
    Route::get('historial/{id}', 'MedicosController@historial');
    Route::get('modificar_cita/{id}', 'MedicosController@modificarc');
    Route::patch('updatec/{id}', 'MedicosController@updcita');
    
    Route::get('agenda', 'MedicosController@agenda');
    Route::get('cita_paciente/{id}', 'MedicosController@pacientes');
});
