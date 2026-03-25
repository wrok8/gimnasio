<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GimnasioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PersonalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('clientes', ClienteController::class);
Route::get('/gimnasios', [GimnasioController::class, 'index']);
Route::resource('planes', PlanController::class);
Route::resource('gimnasios', GimnasioController::class);
Route::resource('personal', PersonalController::class);
