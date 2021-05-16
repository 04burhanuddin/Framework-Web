<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestDaringController;

// 
Route::get('/', [HomeController::class, 'index']);
Route::get('test-daring', [TestDaringController::class, 'index']);

// Pertemuan 09
Route::get('insert-product', [ProductController::class, 'insertform']);
Route::get('product-show', [ProductController::class, 'index']);
Route::post('create', [ProductController::class, 'insert']);

// Pertemuan 10
Route::get('update-product', [ProductController::class, 'index']);
Route::get('edit/{id}', [ProductController::class, 'show']);
Route::post('edit/{id}', [ProductController::class, 'edit']);

// Pertemuan 11
Route::get('delete-records', [ProductController::class, 'index']);
Route::get('delete/{id}', [ProductController::class, 'destroy']);
