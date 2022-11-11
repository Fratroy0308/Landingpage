<?php

use App\Http\Controllers\SitioController;
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
    return view('welcome');
});





Route::get('/landingpage', [SitioController::class, 'landingpage']);
//Route::get('/contacto', [SitioController::class, 'contacto']);
Route::get('/contacto/{codigo?}', [SitioController::class, 'contacto']);
Route::post('/guardar-contacto', [SitioController::class, 'guardar']);