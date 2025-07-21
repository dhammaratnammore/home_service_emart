<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategorysController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/cat', [CategorysController::class, 'index']);

Route::get('/subcategories/{id}', [CategorysController::class, 'getSubcategoryListApi']);

Route::get('/subcategorys/{id}', [CategorysController::class, 'getSubcategoryById']);

Route::get('product',[ProductController::class,'list']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Route::middleware('auth:sanctum')->get('/users', [CategorysController::class, 'user']);



