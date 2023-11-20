<?php

use App\Http\Controllers\Auth\FogoutPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Me\MeController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/me', [MeController::class, 'show']);

Route::post('/login', LoginController::class);
Route::post('/logout', LogoutController::class);
Route::post('/register', RegisterController::class);
Route::post('/verify-email', VerifyEmailController::class);
Route::post('/forgot-password', FogoutPasswordController::class);
Route::post('/reset-password', ResetPasswordController::class);
