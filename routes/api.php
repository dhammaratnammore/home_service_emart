<?php

use App\Http\Controllers\Api\CategorysController;
use Illuminate\Support\Facades\Route;

Route::get('/cat', [CategorysController::class, 'index']);
Route::get('/subcategories/{id}', [CategorysController::class, 'getSubcategoryListApi']);