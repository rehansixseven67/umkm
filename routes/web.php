<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('pelanggan.index');
});

// Route::get('/', function () {
//     return redirect()->route('login');
// });

Route::middleware(['auth', 'role:Admin|Super Admin'])->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    Route::resource('product', ProductController::class)->except(['show']);
    Route::resource('category', CategoryController::class)->except(['show']);
});

Route::get('/pelanggan', [ProductController::class, 'pelangganIndex'])
    ->name('pelanggan.index');

// Route::resources([
//     'roles' => RoleController::class,
//     'users' => UserController::class,
// ]);
