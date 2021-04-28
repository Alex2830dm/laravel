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

Route::get('/', function () { return view('welcome'); })->name('/');
Route::get('registro', 'SystemController@registro')->name('register');
Route::name('registrarusu')->post('registrarusu/', 'SystemController@storeusu');
Route::name('login')->get('login', function() { return view('login'); });
Route::name('validar')->post('validar/', 'LoginController@validar');
Route::name('logout')->get('logout', 'LoginController@logout');
Route::name('doctores')->get('doctores/', 'SystemController@doctores');
Route::name('emergencias')->get('emergencias/', 'SystemController@emergencias');
Route::name('quienes_somos')->get('quienes_somos/', function(){return view('quienes_somos');});
Route::name('informacion')->get('informacion', function(){ return view('unete');});
Route::name('primeros_auxilios')->get('primeros_auxilios', function(){ return view('primeros_auxilios');});
//Route::name('usuarios')->get('usuarios/', 'AdminController@list');

Route::get('/paypal/pay', 'PaymentController@payWithPaypal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');

//---------------------------- Usuario ----------------
Route::prefix('usuario')->group(function () {
    Route::get('perfil', 'SystemController@perfil');
    Route::get('modificar/{id}', 'UsuariosController@editusu');
    Route::patch('usuarioupd/{id}', 'UsuariosController@updusu');

    Route::get('doctores/', 'SystemController@doctores');
    Route::name('js02')->get('js02/', 'JqueryController@js02');
    Route::name('citas')->get('citas/{id}', 'SystemController@datosd');
    Route::name('registrocita')->post('registrocita', 'SystemController@registrocita');
    Route::name('historial')->get('historial', 'SystemController@historial');    
    Route::get('modificar_cita/{id}', 'SystemController@modificarc');
    Route::get('detalles/{id}', 'SystemController@detallesc');
    Route::patch('updatec/{id}', 'SystemController@updcita');
    Route::patch('cancelar/{id}', 'SystemController@cancelar');

    Route::get('emergencias/', 'SystemController@emergencias');        
});
Route::prefix('admin')->group(function () {
    Route::get('perfil', 'AdminController@perfil')->name('perfil');
    Route::get('modificar/{id}', 'AdminController@editusu');
    Route::patch('update/{id}', 'AdminController@updusu');
    Route::name('usuarios')->get('usuarios/', 'AdminController@usuarios');
    Route::get('usuariosedit/{id}', 'AdminController@editu');    
    Route::patch('usuariosupdate/{id}', 'AdminController@updateusu');
    Route::delete('usuariosdelete/{id}', 'AdminController@destroyusu');
    Route::get('admin/user-list', 'AdminController@exportExcel')->name('users.excel');
    Route::post('impor-list-excel', 'AdminController@importExcel')->name('users.import.excel');

    Route::get('doctores/', 'AdminController@doctores');
    Route::name('js01')->get('js01/', 'JqueryController@js01');
    Route::get('citas/{id}', 'AdminController@datosd');
    Route::get('historial/{id}', 'AdminController@historial');
    Route::post('registrocita', 'AdminController@registrocita');
    Route::get('modificar_cita/{id}', 'AdminController@modificarc');
    Route::get('detalles/{id}', 'AdminController@detallesc');
    Route::patch('updatec/{id}', 'AdminController@updcita');
    Route::patch('cancelar/{id}', 'AdminController@cancelar');
    
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
    Route::get('perfil', 'SystemController@perfil');
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
    Route::get('detalles/{id}', 'MedicosController@detallesc');
    Route::patch('cancelar/{id}', 'MedicosController@cancelar');
    
    Route::get('agenda', 'MedicosController@agenda');
    Route::get('cita/{id}', 'MedicosController@cita');
    Route::patch('atendida/{id}', 'MedicosController@actpac');
    Route::get('pacientes/{id}', 'MedicosController@pacientes');
    Route::get('citas-list', 'MedicosController@exportExcel')->name('citas.excel');
});
