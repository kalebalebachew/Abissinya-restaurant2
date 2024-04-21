<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;

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


Route::get('/login', [AdminController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AdminController::class, 'adminLogin'])->name('login');



Route::group(['middleware' => ['auth:sanctum']], function () {

   
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/index', [AdminController::class, 'index']);
   
   
    Route::post('/addMenu', [AdminController::class, 'addMenu'])->name('addMenu');
    Route::put('/update-menu/{food_id}', [AdminController::class, 'updateMenuItem']);
    Route::delete('/delete-menu/{food_id}', [AdminController::class, 'deleteMenuItem']);
});






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});
