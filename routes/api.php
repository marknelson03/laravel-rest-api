<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//test route
Route::get('/test', function(Request $request) {
    return response()->json(['message' => 'API is working']);
});
// Get all the products
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);

// Get a single product by ID
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show']);

// Create a new product
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store']);

// Update an existing product by ID
Route::put('/products/{id}', [App\Http\Controllers\ProductController::class, 'update']);

// Delete a product by ID
Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
