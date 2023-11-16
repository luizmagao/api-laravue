<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Me\MeController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/me', [MeController::class, 'show']);

Route::post('/login', LoginController::class);
Route::post('/logout', LogoutController::class);