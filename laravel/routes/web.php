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

// Inicio
Route::get('/', 'InicioController@getInicioView');

// Historia

Route::get('/historia','HistoriaController@getHistoriaView');

//Especialistas

Route::get('/especialistas', 'EspecialistasController@getEspecialistasView');

//Contacto

Route::get('/contacto', 'ContactController@getContactView');

Route::post('/contacto', 'ContactController@postContact');

//Contacto personal

Route::get('/contactopersonal','ContactoPersonalController@getContactoPersonalView');

Route::post('/contactopersonal','ContactoPersonalController@postContactoPersonal');
