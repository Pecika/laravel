<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\PregledController;
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

Route::get('/pregled',[PregledController::class,'index']);

Route::get('/pregled/{id}',[PregledController::class,'show']);



Route::post('/register',[ApiAuthController::class,'register']);
Route::post('/login',[ApiAuthController::class,'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout',[ApiAuthController::class,'logout']);
    Route::delete('/pregled/{id}',[PregledController::class,'destroy']);
    Route::post('/pregled',[PregledController::class,'store']);
    
    Route::put('/pregled/{id}',[PregledController::class,'update']);

    
});