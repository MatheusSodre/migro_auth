<?php


use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Evaluation\EvaluationController;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Support\Facades\Route;


Route::post('register',[RegisterController::class,'store']);
Route::post('auth', [AuthController::class, 'auth']);

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('user',UserController::class);
});


Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
