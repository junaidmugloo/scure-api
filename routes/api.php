<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SecureDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // secure routs here


    Route::get('/secure-data', [SecureDataController::class, 'index']);
});