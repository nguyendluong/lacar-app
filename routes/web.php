<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/doi-xe', [HomeController::class, 'fleet'])->name('fleet');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');
Route::get('/cach-thue-xe', [HomeController::class, 'howToRent'])->name('how_to_rent');
Route::get('/bang-gia', [HomeController::class, 'pricing'])->name('pricing');
