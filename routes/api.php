<?php

use App\Http\Controllers\API\IphoneController;
use App\Http\Controllers\API\RendelesController;
use App\Http\Controllers\API\UserController;
use App\Models\Iphone;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("/iphones", IphoneController::class);

Route::apiResource("/users", UserController::class);

Route::apiResource("/rendelesek", RendelesController::class);
