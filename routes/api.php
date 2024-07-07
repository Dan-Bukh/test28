<?php

use App\Http\Controllers\Api\CarController;
use Illuminate\Support\Facades\Route;



Route::get('/models', [CarController::class, 'get_car_models']);
Route::get('/makes', [CarController::class, 'get_car_makes']);
Route::apiResource('/cars', CarController::class);
