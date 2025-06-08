<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

// Pricing Routes
Route::get('/pricing/web-apps', [PricingController::class, 'webApps'])->name('pricing.web-apps');
Route::get('/pricing/animation', [PricingController::class, 'animation'])->name('pricing.animation');
Route::get('/pricing/video-editing', [PricingController::class, 'videoEditing'])->name('pricing.video-editing');
Route::get('/pricing/digital-marketing', [PricingController::class, 'digitalMarketing'])->name('pricing.digital-marketing');
Route::get('/pricing/graphic-design', [PricingController::class, 'graphicDesign'])->name('pricing.graphic-design');
Route::get('/pricing/umkm', [PricingController::class, 'umkm'])->name('pricing.umkm');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});