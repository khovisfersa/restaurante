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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/dispRest', 'restAdminController@display');

Route::get('/dispRestAdmin', function () {
    return 'Esta página é para que os admins façam ajustes nos pratos do dia';
});

Route::get('/dispRestAdmin/addPrato', 'foodController@AdicionaPrato');
