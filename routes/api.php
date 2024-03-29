<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\GeneralController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\CartController;
use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('/produtos', ProductController::class);
Route::get('/marcas', [GeneralController::class, 'getAllMarcas']);
Route::get('/categorias', [GeneralController::class, 'getAllCategorias']);
Route::get('/tipos', [GeneralController::class, 'getAllTipos']);
Route::post('/new/user', [UserController::class, 'newUser']);

Route::post('/login/auth', [AuthController::class, 'authentication']);
Route::get('/teste', [GeneralController::class, 'testUserAuth']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user/carrinho', [CartController::class, 'getAllProductsOnCart']);
Route::middleware('auth:sanctum')->post('/new/cart', [CartController::class, 'insertProductOnCart']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});