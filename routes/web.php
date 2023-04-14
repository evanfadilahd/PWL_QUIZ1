<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TransactionController;

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

Route::resource('facilitate', FacilitateController::class);
Route::resource('home', HomeController::class);
Route::resource('location', LocationController::class);
Route::resource('transaction', TransactionController::class);