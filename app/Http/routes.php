<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');// generadopor php artisan
});

Route::auth();// generadopor php artisan

Route::get('/home', 'HomeController@index');// generadopor php artisan
//---------Bitacoras
Route::get('bitacora','Administracion\BitacoraControlador@generar_bitacora');

//-------------Personas-------------------------
Route::get('frmpersona', function () {
    return view('Personas/frmpersonas');// generadopor php artisan
});
Route::get('controlador','PersonaControlador@action_index');

Route::get('/personas', 'Persona\PersonaControlador@obtenerpersonas');
Route::post('/persona', 'Persona\PersonaControlador@RegistrarPersona');
Route::delete('/persona/{persona}', 'Persona\PersonaControlador@dar_baja');


