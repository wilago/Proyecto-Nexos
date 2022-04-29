<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CuentaController;
use App\Http\Controllers\Api\UserController;

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


Route::post('users',[UserController::class,'store']);
Route::post('login',[UserController::class,'login']);


Route::group(['middleware'=>'auth:api'], function(){
    Route::apiResource('cuentas', CuentaController::class);
    Route::post('logout',[UserController::class,'logout']);
});
