<?php

use App\Http\Middleware\LogRequests;
use Illuminate\Http\Request;
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

Route::middleware(LogRequests::class)
     ->group(function () {
         Route::apiResource("/user", \App\Http\Controllers\UserController::class);
     });


Route::post("/hash", function(Request $request) {
   return \Illuminate\Support\Facades\Hash::make($request->value);
});
