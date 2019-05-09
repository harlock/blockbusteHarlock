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


Route::get('/ana',function(){return view('ana.index');});

Route::get('/abner', function () {
    return view('Abner.index');
});
=======
<<<<<<< HEAD
Route::get('/ana',function(){return view('ana.index');});

Route::get('/jonathan', function () {
    return view('jonathan.index');
});

Route::get('/carlos', function () {
    return view('carloss.carlos');
});

Route::get('/ana',function(){return view('ana.index');});

<<<<<<< HEAD
Route::get('/Mendieta',function()
{return view('Mendieta.index');});


=======
>>>>>>> cca79d55df51efc1e34a0a31eeb6a1e8ce7be82f
>>>>>>> 1c145c7a279135dc04e60f76950639add4e7faac
>>>>>>> 8bf827e9c85723905cfdd3c22dc81ac152897853
