<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ourclientController;
use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', [indexController::class, 'index']);
Route::get('/service', [serviceController::class, 'service']);
Route::get('/about', [aboutController::class, 'about']);
Route::get('/ourclient', [ourclientController::class, 'ourclient']);
