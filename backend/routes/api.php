<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    // Define protected routes here
    Route::get('/index', [AdminController::class, 'index']);
    Route::post('/add-menu', [AdminController::class, 'addMenuItem']);
    Route::put('/menu/{menu}', [AdminController::class, 'updateMenuItem']);
});

Route::post('/login', [AdminController::class, 'adminLogin'])->name('admin.login');

// Normal User routes
Route::post('/orders/place', [OrdersController::class, 'placeOrder']);
Route::post('/reserve', [ReservationsController::class, 'reserveTable']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});
