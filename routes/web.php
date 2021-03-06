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

Route::get("usuario/mobilelogin","UsuarioController@mobilelogin");
Route::get("usuario/getusers","UsuarioController@getusers");
Route::get("usuario/insert","UsuarioController@insert");
Route::get("comodo/getcomodos","ComodoController@getcomodos");
