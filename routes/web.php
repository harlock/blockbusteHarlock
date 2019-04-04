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
Route::get('/hola',function(){
    return "hola";
});
Route::get('/hola/{nombre}',function($nombre){
    return "hola: ".$nombre;
});
Route::resource('prueba','PruebaController');