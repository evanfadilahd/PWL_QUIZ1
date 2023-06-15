<?php


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TransactionController;
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
All Admin Routes List
--------------------------------------------
--------------------------------------------*/

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

// Chat Route
Route::get('/chat', [ChatController::class, 'index'])->middleware('auth');
Route::post('/chat', [ChatController::class, 'store'])->middleware('auth');
Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');



