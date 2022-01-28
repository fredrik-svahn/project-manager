<?php

use App\Http\Middleware\LogRequests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['log:noreplay', 'auth:sanctum'])->group(function () {
    Route::apiResource("/user", \App\Http\Controllers\UserController::class);
});

Route::get("/whoami",
    function (Request $request) {
        return $request->user();
    })->middleware("auth:sanctum");

Route::middleware(['log', 'auth:sanctum'])->group(function () {

});

Route::post('/login', [\App\Http\Controllers\UserController::class, "login"])->middleware('log:noreplay');
Route::post("/user", [\App\Http\Controllers\UserController::class, "store"])->middleware('log:noreplay');

