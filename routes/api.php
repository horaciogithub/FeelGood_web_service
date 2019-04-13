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
Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', 'API\UserController@details');
});