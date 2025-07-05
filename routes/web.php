<?php

use App\Http\Controllers\category_controller;
use App\Http\Controllers\sub_category_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('leyout.app');
});

//category routes
Route::get('/categoryform', function () {
    return view('pages.categoryform');
});
Route::post('/category/add', [category_controller::class, 'categoryadd'])->name('category.add');
Route::get('/categorylist',[category_controller::class,'showcategory'])->name('catlist');
Route::get('category/{id}', [category_controller::class, 'destroyCategory'])->name('destroy');
Route::get('/category/view/{id}', [category_controller::class, 'categoryview'])->name('category.view');
Route::get('/category/edit/{id}', [category_controller::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [category_controller::class, 'update'])->name('category.update');

//sub Category Routes
Route::get('/sub_categoryform',[sub_category_controller::class,'selectcat']);
Route::post('/subcategoryadd', [sub_category_controller::class, 'subcategoryadd'])->name('subcategoryadd');
Route::get('/subcategorylist', [sub_category_controller::class, 'showsubcategory'])->name('subcategorylist');
Route::get('subcategory/{id}', [sub_category_controller::class, 'destroySubCategory'])->name('subcatdestroy');
Route::get('/subcategory/edit/{id}', [sub_category_controller::class, 'edit'])->name('subcatedit');
Route::put('/subcategory/update/{id}', [sub_category_controller::class, 'update'])->name('subcatupdate');
Route::get('/subcategory/view/{id}', [sub_category_controller::class, 'show'])->name('subcatview');






