<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReviewController;

Auth::routes([
    'register' => true,
    'reset' => false,
]);

Route::get('/', function () {
    return redirect()->route('pelanggan.home');
});

// Route::get('/', function () {
//     return redirect()->route('login');
// });

Route::middleware(['auth', 'role:Admin|Super Admin'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])
    ->name('reviews.destroy');
    Route::get('/admin/ulasan', [ReviewController::class, 'adminIndex'])
    ->name('admin.reviews.index');

    Route::resource('product', ProductController::class)->except(['show']);
    Route::resource('category', CategoryController::class)->except(['show']);
});

Route::get('/pelanggan', [ProductController::class, 'pelangganIndex'])
    ->name('pelanggan.index');

Route::get('/produk/{product}', [ProductController::class, 'show'])
    ->name('pelanggan.show');

Route::middleware('auth')->group(function () {
    Route::post('/ulasan', [ReviewController::class, 'store'])
        ->name('reviews.store');
});

// Route::resources([
//     'roles' => RoleController::class,
//     'users' => UserController::class,
// ]);


Route::get('/home-pelanggan', [ProductController::class, 'pelangganHome'])
    ->name('pelanggan.home');

Route::view('/kontak', 'kontak.kontak')->name('kontak');

Route::get('/ulasan', [ReviewController::class, 'index'])
    ->name('reviews.index');
