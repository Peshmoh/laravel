<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceControler; // Fixed the typo from ServiceControler to ServiceController
use App\Http\Controllers\CategoryController; // Add CategoryController
use App\Http\Controllers\OrderController; // Add OrderController
use App\Http\Controllers\CustomerController; // Add CustomerController
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource routes for products and services
Route::resource('/products', ProductController::class);
Route::resource('/services', ServiceControler::class); // Corrected typo here

// Resource routes for categories, orders, and customers
Route::resource('/categories', CategoryController::class);
Route::resource('/orders', OrderController::class);
Route::resource('/customers', CustomerController::class); // Added customers resource
