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
    return redirect('In');
});

Route::get('Login','vistas@Login')->name('Login');

Route::get('Inicio','vistas@Inicio')->name('Inicio');
Route::get('Entrada','vistas@Entrada')->name('Entrada');
Route::get('Adopcion','vistas@Adopcion')->name('Adopcion');
Route::get('Seccion','vistas@Seccion')->name('Seccion');
Route::get('Requisitos','vistas@Requisitos')->name('Requisitos');

// L O G I N 

Route::get('In','login@In')->name('In');
Route::POST('/iniciasesion','login@iniciasesion')->name('iniciasesion');

// A D O P C I O N
Route::get('Adoptar','Adopcion@Adoptar')->name('Adoptar');
Route::get('F_Adoptar','Adopcion@F_Adoptar')->name('F_Adoptar');
Route::Post('G_Adopcion','Adopcion@G_Adopcion')->name('G_Adopcion');

//REPORTE SOLICITUD
Route::get('Solicitudes','Solicitudes@Solicitudes')->name('Solicitudes');
Route::get('Aceptado','Solicitudes@Aceptado')->name('Aceptado');
Route::get('Rechazado','Solicitudes@Rechazado')->name('Rechazado');
Route::get('Entregado','Solicitudes@Entregado')->name('Entregado');

//MASCOTAS EN ADOPCION
Route::get('Mascotas','Solicitudes@Mascotas')->name('Mascotas');