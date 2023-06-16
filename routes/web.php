<?php


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SupplierLocationController;

use App\Http\Controllers\ChatController;


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
Route::get('/', [SesiController::class, 'index'])->name('login');
Route::post('/', [SesiController::class, 'login']);

// REGISTER
Route::get('register', [SesiController::class, 'register'])->name('register');
Route::post('createaccount', [SesiController::class, 'create']);

// Forntend Costumer Liat Product
// Route::get('transaction', [\App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');
// Route::get('transaction/detail/{productfarm:id}', [\App\Http\Controllers\TransactionController::class, 'detail'])->name('transaction.detail');

// Frontend Supplier Add
// Route::get('suppliers', [\App\Http\Controllers\SupplierController::class, 'index'])->name('suppliers');
// Route::get('suppliers/jual', [\App\Http\Controllers\SupplierController::class, 'jual'])->name('jual');
// Route::get('/suppliers/jual/createAnother', function () {
//     return view('frontend.suppliers.createAnother');
// });


// ========================================================
// Fronend Supplier Location Test 1
Route::get('location', [\App\Http\Controllers\SupplierLocationController::class, 'location'])->name('location');
Route::get('/suppliers/location/create', function () {
    return view('frontend.suppliers.createLoc');
});
// ========================================================

// // Test2
// Route::get('/location/create', [SupplierLocationController::class, 'create'])->name('location.create');
// Route::post('/location', [SupplierLocationController::class, 'store'])->name('location.store');

// //  test3
// Route::get('locations', [SupplierLocationController::class, 'index'])->name('locations.index');
// Route::get('locations/create', [SupplierLocationController::class, 'create'])->name('locations.create');
// Route::post('locations', [SupplierLocationController::class, 'store'])->name('locations.store');


// // Forntend Buyyer
// Route::get('transaction', [\App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');
// Route::get('transaction/contact', [\App\Http\Controllers\TransactionController::class, 'contact'])->name('contact');
// Route::get('transaction/detail/{productfarm:id}', [\App\Http\Controllers\TransactionController::class, 'detail'])->name('transaction.detail');

// // Forntend Supplier
// Route::get('suppliers', [\App\Http\Controllers\SupplierController::class, 'index'])->name('suppliers');
// Route::get('suppliers/jual', [\App\Http\Controllers\SupplierController::class, 'jual'])->name('jual');
// Route::get('/suppliers/jual/createAnother', function () {
// return view('frontend.suppliers.createAnother');
// });

Auth::routes();
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
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Forntend Buyyer
    Route::get('transaction', [\App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');
    Route::get('transaction/contact', [\App\Http\Controllers\TransactionController::class, 'contact'])->name('contact');
    Route::get('transaction/detail/{productfarm:id}', [\App\Http\Controllers\TransactionController::class, 'detail'])->name('transaction.detail');
});
// Route::middleware(['auth', 'user-access:buyers'])->group(function () {
// });

Route::group(['middleware' => 'role:' . User::ROLE_BUYER], function () {
    // Forntend Costumer Liat Product
    Route::get('transaction', [TransactionController::class, 'index'])->name('buyer.dashboard');
    Route::get('transaction/contact', [TransactionController::class, 'contact'])->name('buyer.contact');
    Route::get('transaction/detail/{productfarm:id}', [TransactionController::class, 'detail'])->name('buyer.detail');
});

/*------------------------------------------
--------------------------------------------
All Seller Routes List
--------------------------------------------
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:seller'])->group(function () {
  
//     Route::get('suppliers', [\App\Http\Controllers\SupplierController::class, 'index'])->name('suppliers');
//     Route::get('suppliers/jual', [\App\Http\Controllers\SupplierController::class, 'jual'])->name('jual');
//     Route::get('/suppliers/jual/createAnother', function () {
//     return view('frontend.suppliers.createAnother');
//     });
// });
  

Route::group(['middleware' => 'role:' . User::ROLE_SELLER], function () {
    // Frontend Supplier Add
    Route::get('suppliers', [SupplierController::class, 'index'])->name('seller.dashboard');
    Route::get('suppliers/jual', [SupplierController::class, 'jual'])->name('seller.jual');
    Route::get('/suppliers/jual/createAnother', function () {
        return view('frontend.suppliers.createAnother');
});

    // Fronend Supplier Location
    Route::get('location', [SupplierController::class, 'location'])->name('location');
    Route::get('/suppliers/jual/gps', function () {
        return view('frontend.suppliers.gps');
    });

});

/*------------------------------------------
--------------------------------------------
--------------------------------------------
--------------------------------------------*/
//  Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
//     // ADMIN ROUTE
//     Route::get('/admin/dasboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
//     Route::resource('admin/productfarm', \App\Http\Controllers\Admin\ProductFarmController::class);
//     Route::put('admin/productfarm/update-image/{id}', [\App\Http\Controllers\Admin\ProductFarmController::class, 'updateImage'])->name('admin.productfarm.updateImage');
//  });


// // NAVIGATION
// Route::resource('facilitate', FacilitateController::class);
// Route::resource('home', HomeController::class);

Route::group(['middleware' => 'role:' . User::ROLE_ADMIN], function () {
    // ADMIN ROUTE
    Route::get('/admin/dasboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/productfarm', ProductFarmController::class);
    Route::put('admin/productfarm/update-image/{id}', [ProductFarmController::class, 'updateImage'])->name('admin.updateImage');
});

// NAVIGATION
Route::resource('facilitate', FacilitateController::class);
Route::resource('home', HomeController::class);

// NAVIGATION--LOCATION&MORE
// Route::resource('location', LocationController::class);

// Route::get('butchery-detail', [LocationController::class, 'butchery']);
// Route::get('land-detail', [LocationController::class, 'land']);

// Route::view('tes', '/layout/layout2');

// REVIEW

//use App\Http\Controllers\ReviewController;

Route::get('/rev', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// RECOMMENDATION

// use App\Http\Controllers\RecommendationController;
Route::get('/rec', [RecommendationController::class, 'index'])->name('recommendations.index');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Chat Route
Route::get('/chat', [ChatController::class, 'index'])->middleware('auth');
Route::post('/chat', [ChatController::class, 'store'])->middleware('auth');
Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');