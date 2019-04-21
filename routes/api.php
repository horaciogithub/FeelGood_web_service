<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

/* Devuelve información se usuarios de la base de datos */
Route::get('users', 'API\UsersDataController@users');
Route::delete('userDelete', 'API\UsersDataController@userDelete');
Route::post('userWarning', 'API\UsersDataController@userWarning');

/* Devuelve información de los clientes */
Route::get('clients', 'API\UsersDataController@clients');

/* Devuelve la tabla de ejercicios en base a su email */
Route::post('clientTable', 'API\UsersDataController@clientTable');

/* Registra la rutina de ejercicios de un usuario */
Route::post('postTable', 'API\UsersDataController@postTable');

/* Elimina la rutina de ejercicios de un usuario */
Route::delete('deleteTable', 'API\UsersDataController@deleteTable');

/* Devuelve los mensajes generados por los usuarios en la base de datos */
Route::get('messages', 'API\MessagesController@messages');

/* Devuelve los mensajes generados por los usuarios en la base de datos */
Route::post('messageRegistration', 'API\MessagesController@messageRegistration');
Route::delete('messageDelete', 'API\MessagesController@messageDelete');

/* Servicio de login de usuarios */
Route::post('login', 'API\UserController@login');

/* Servicio de registro de usuarios */
Route::post('register', 'API\UserController@register');

/* Servicio que muestra los detalles de los  usuarios logeados */
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('details', 'API\UserController@details');
});

/*     EXERCICES     */

/* Muestra las rutinas de ejercicios */
Route::get('exercices', 'API\ExercicesController@data');

/* Registra una nueva rutina de ejercicios */
Route::post('routineRegister', 'API\ExercicesController@routineRegister');
