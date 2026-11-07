<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
Route::redirect('/', '/dashboard');

Route::resource('product', ProductController::class)->except(['show']);

Route::resource('category', CategoryController::class)->except(['show']);

Route::view('/pelanggan', 'pelanggan.index')->name('pelanggan.index');