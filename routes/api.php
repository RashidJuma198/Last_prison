<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PrisonController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//protected Route
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::delete('/products/{id}',[PrisonController::class,'destroy']); 
    Route::post('prison',[PrisonController::class,'store']);
    Route::post('prison/{id}',[PrisonController::class,'update']);
    Route::delete('prison/{id}',[PrisonController::class,'destroy']);
    Route::get('/logout',[AuthController::class,'logout']);
});

//Public Route
Route::get('prison',[PrisonController::class,'index']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'login']);
Route::get('prison/{id}',[PrisonController::class,'show']);
Route::get('prison/search/{name}',[PrisonController::class,'search']);