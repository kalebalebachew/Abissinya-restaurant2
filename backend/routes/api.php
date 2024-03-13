<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;

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
// Protected routes for the admin to do some operations
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::get('/index', [AdminController::class, 'index']);
    Route::post('/add-menu', [AdminController::class, 'addMenuItem']);
    Route::put('/update-menu/{food_id}', [AdminController::class, 'updateMenuItem']);

    });

// the only public route for the admin
Route::post('/login', [AdminController::class, 'adminLogin']);

//Public routes for guest users
Route::post('/orders/place', [OrdersController::class, 'placeOrder']);
Route::post('/reserve', [ReservationsController::class, 'reserveTable']);
Route::get('/search/{food_name}', [MenuController::class, 'searchMenuItem']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});
