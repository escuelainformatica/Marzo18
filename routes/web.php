<?php

use App\Http\Controllers\IngresoController;
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

Route::get('/login',[IngresoController::class,'LoginGet']);
Route::get('/logout',[IngresoController::class,'Logout']);
Route::post('/login',[IngresoController::class,'LoginPost']);
Route::get('/privada',[IngresoController::class,'PaginaPrivada']);
