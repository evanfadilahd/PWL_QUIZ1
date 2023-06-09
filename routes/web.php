<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TransactionController;

use App\Http\Controllers\Admin\ProductFarmController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SupplierController;

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
Route::get('a', [SesiController::class, 'index'])->name('login');
Route::post('login', [SesiController::class, 'login']);
Route::resource('success', HomeController::class);

// REGISTER
Route::get('reg', [SesiController::class, 'register'])->name('register');
Route::post('createaccount', [SesiController::class, 'create']);

Auth::routes();

// Forntend Costumer Liat Product
Route::get('transaction', [\App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');
Route::get('transaction/contact', [\App\Http\Controllers\TransactionController::class, 'contact'])->name('contact');
Route::get('transaction/detail/{productfarm:id}', [\App\Http\Controllers\TransactionController::class, 'detail'])->name('transaction.detail');

// Frontend Supplier Add
Route::get('suppliers', [\App\Http\Controllers\SupplierController::class, 'index'])->name('suppliers');
Route::get('suppliers/jual', [\App\Http\Controllers\SupplierController::class, 'jual'])->name('jual');
Route::get('/suppliers/jual/createAnother', function () {
    return view('frontend.suppliers.createAnother');
});

// Fronend Supplier Location
Route::get('location', [\App\Http\Controllers\SupplierController::class, 'location'])->name('location');

Route::get('/suppliers/jual/gps', function () {
    return view('frontend.suppliers.gps');
});

// Route::get('suppliers/jual/gps', [\App\Http\Controllers\SupplierController::class, 'store']);

// Route::get('/', function () {
//     return view('frontend.suppliers.createAnother');
// });

//Route::get('suppliers/createAnother', \App\Http\Controllers\Admin\ProductFarmController::class, 'createAnother');


/*------------------------------------------
--------------------------------------------
All Buyers Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:buyers'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Seller Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:seller'])->group(function () {
  
    // Forntend
    // Route::get('transaction', [\App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');
    // Route::get('transaction/contact', [\App\Http\Controllers\TransactionController::class, 'contact'])->name('contact');
    // Route::get('transaction/detail/{productfarm:id}', [\App\Http\Controllers\TransactionController::class, 'detail'])->name('transaction.detail');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    // ADMIN ROUTE
    Route::get('/admin/dasboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::resource('admin/productfarm', \App\Http\Controllers\Admin\ProductFarmController::class);
    Route::put('admin/productfarm/update-image/{id}', [\App\Http\Controllers\Admin\ProductFarmController::class, 'updateImage'])->name('admin.productfarm.updateImage');
});


// NAVIGATION
Route::resource('facilitate', FacilitateController::class);
Route::resource('home', HomeController::class);

// NAVIGATION--LOCATION&MORE
// Route::resource('location', LocationController::class);

Route::get('butchery-detail', [LocationController::class, 'butchery']);
Route::get('land-detail', [LocationController::class, 'land']);

// Route::resource('transaction', TransactionController::class);

Route::view('tes', '/layout/layout2');

// REVIEW

use App\Http\Controllers\ReviewController;

Route::get('/rev', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// RECOMMENDATION

use App\Http\Controllers\RecommendationController;

Route::get('/rec', [RecommendationController::class, 'index'])->name('recommendations.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


