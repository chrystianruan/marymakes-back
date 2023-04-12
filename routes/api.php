<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\GeneralController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\LoginController;

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
Route::post('/login/auth', [LoginController::class, 'authentication']);