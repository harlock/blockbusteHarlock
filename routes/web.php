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


Route::get('/ana',function(){return view('ana.index');});

Route::get('/abner', function () {
    return view('Abner.index');
});

Route::get('/ana',function(){return view('ana.index');});

Route::get('/jonathan', function () {
    return view('jonathan.index');
});

Route::get('/carlos', function () {
    return view('carloss.carlos');
});

Route::get('/ana',function(){return view('ana.index');});


Route::get('/Mendieta',function()
{return view('Mendieta.index');});

Route::get('/emmanuel', function () {
    return view('Emmanuel.index');
});


