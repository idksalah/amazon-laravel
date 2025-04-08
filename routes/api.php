<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PaymentMethodController;

// Test route
Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando correctamente']);
});

// User routes


use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

// Product routes
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Category routes
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

// Review routes
Route::get('/products/{productId}/reviews', [ReviewController::class, 'index']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);

// Payment method routes
Route::get('/payment-methods/{userId}', [PaymentMethodController::class, 'index']);
Route::post('/payment-methods', [PaymentMethodController::class, 'store']);
Route::delete('/payment-methods/{id}', [PaymentMethodController::class, 'destroy']);

// Auth routes (add these at the top)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
