<?php

use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;

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

    $nombre ="Jorge";
    return view('contacto');
});


Route::resource('rols', [RolController::class])->names('rols');


Route::get('/prueba', function () {

    $nombre ="Jorge";
    return view('home');
});
