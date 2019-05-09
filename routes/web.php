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
    return view('layouts.layout');
});
Route::get('/cesar', function () {
    return view('cesar.index');
});

Route::resources([
    'generos'=>'GenerosController'
]);
Route::get('/vic', function () {
    return view('Victor.index');
});
Route::get('/angeles',function(){return view('angeles.index');});

Route::get('/Miriam',function(){return view('Miriam.index');});
