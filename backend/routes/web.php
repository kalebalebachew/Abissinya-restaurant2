<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

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

Route::get('/login', [AdminController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AdminController::class, 'adminLogin'])->name('login');



Route::group(['middleware' => ['auth:sanctum']], function () {

   
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/index', [AdminController::class, 'index']);
    Route::post('/addMenu', [AdminController::class, 'addMenu'])->name('addMenu');
    Route::put('/update-menu/{food_id}', [AdminController::class, 'updateMenuItem']);
    Route::delete('/delete-menu/{food_id}', [AdminController::class, 'deleteMenuItem']);
});




Route::post('/addtoCart',[HomeController::class, 'addToCart'])->name('addtoCart.addTocart');
Route::post('/orders', [OrdersController::class, 'placeOrder'])->name('orders.placeOrder');
Route::post('/reserve', [ReservationsController::class, 'reserveTable'])->name('reserve.reserveTable');

Route::get('/search/{food_name}', [MenuController::class, 'searchMenuItem']);



Route::get('/', [HomeController::class, 'showMenu']);


