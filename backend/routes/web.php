<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReservationsController;

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

Route::get('/', [HomeController::class, 'showMenu']);



Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


   
    Route::post('/addMenu', [AdminController::class, 'addMenu'])->name('addMenu');
    Route::put('/update-menu/{food_id}', [AdminController::class, 'updateMenuItem']);
    Route::delete('/delete-menu/{food_id}', [AdminController::class, 'deleteMenuItem']);
});



Route::post('/addtoCart',[HomeController::class, 'addToCart'])->name('addtoCart.addTocart');
Route::post('/orders', [OrdersController::class, 'placeOrder'])->name('orders.placeOrder');
Route::post('/reserve', [ReservationsController::class, 'reserveTable'])->name('reserve.reserveTable');




require __DIR__.'/auth.php';
