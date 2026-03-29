<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/doi-xe', [HomeController::class, 'fleet'])->name('fleet');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');
Route::get('/cach-thue-xe', [HomeController::class, 'howToRent'])->name('how_to_rent');
Route::get('/bang-gia', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/xe/{id}', [CarController::class, 'show'])->name('car.show');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

use App\Http\Controllers\BookingController;

Route::post('/api/apply-coupon', [\App\Http\Controllers\CouponController::class, 'apply'])->name('coupons.apply');

Route::middleware('auth')->group(function () {
    Route::get('/my-bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCarController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminBookingController;

Route::middleware(['auth', \App\Http\Middleware\IsAdmin::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Cars
    Route::resource('cars', AdminCarController::class)->except(['show']);
    // Users
    Route::get('users', [AdminUserController::class, 'index'])->name('users.index');
    // Bookings
    Route::get('bookings', [AdminBookingController::class, 'index'])->name('bookings.index');
    Route::patch('bookings/{booking}/status', [AdminBookingController::class, 'updateStatus'])->name('bookings.status');
    Route::get('bookings/block', [AdminBookingController::class, 'createBlock'])->name('bookings.block');
    Route::post('bookings/block', [AdminBookingController::class, 'storeBlock'])->name('bookings.storeBlock');
    
    // Coupons
    Route::resource('coupons', \App\Http\Controllers\Admin\AdminCouponController::class)->except(['show']);
});
