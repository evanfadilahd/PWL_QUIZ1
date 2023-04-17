<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SesiController;
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
// Route::resource('', SesiController::class);

// LOGIN
Route::get('', [SesiController::class, 'index']);
Route::post('login', [SesiController::class, 'login']);
Route::resource('success', HomeController::class);


// NAVIGATION
Route::resource('facilitate', FacilitateController::class);
Route::resource('home', HomeController::class);

// NAVIGATION--LOCATION&MORE
Route::resource('location', LocationController::class);

Route::get('butchery-detail', [LocationController::class, 'butchery']);
Route::get('land-detail', [LocationController::class, 'land']);


Route::resource('transaction', TransactionController::class);

