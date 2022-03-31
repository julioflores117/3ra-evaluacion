<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use App\Http\Controllers\Controlador_perros;
use App\Http\Controllers\Controlador_peliculas;
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
    return view('index');
});


Route::get('/view_appi.blade.php',[Controlador_perros::class, 'view_appi'])->name('datos');

Route::get('/index2.blade.php', function () {
    return view('index2');
});

Route::get('/la_abuela.blade.php',[Controlador_peliculas::class, 'index'])->name('Peliculas');

Route::get('/index.blade.php', function () {
    return view('index');
});
Route::get('/dia_de_la_bandera.blade.php',[Controlador_peliculas::class, 'index2'])->name('Peliculas');

Route::get('/355.blade.php',[Controlador_peliculas::class, 'index3'])->name('Peliculas');

Route::get('/Scream.blade.php', function () {
    return view('Scream');
});

Route::get('/Belfast.blade.php',[Controlador_peliculas::class, 'Belfast'])->name('Peliculas');

Route::get('/Uncharted.blade.php', function () {
    return view('Uncharted');
});
Route::get('/Plan-de-huida.blade.php', function () {
    return view('Plan-de-huida');
});
Route::get('/Cásate conmigo.blade.php', function () {
    return view('Cásate conmigo');
});
Route::get('/Shazam!.blade.php', function () {
    return view('Shazam!');
});
Route::get('/Spider-Man.blade.php',[Controlador_peliculas::class, 'index4'])->name('Peliculas');

Route::get('/Godzilla-vs-Kong.blade.php', function () {
    return view('Godzilla-vs-Kong');
});