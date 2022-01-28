<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth_api')->group(function() {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index']);
});

Route::get("/login", [\App\Http\Controllers\UserController::class, 'login']);
Route::post( '/login', [\App\Http\Controllers\UserController::class, 'login_post']);
Route::get('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register_post']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
