<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebAppsPricingController;
use App\Http\Controllers\AnimationPricingController;
use App\Http\Controllers\VideoEditingPricingController;
use App\Http\Controllers\DigitalMarketingPricingController;
use App\Http\Controllers\GraphicDesignPricingController;
use App\Http\Controllers\UmkmPricingController;

Route::get('/', function () {
    return view('home');
});

// Pricing Routes
Route::get('/pricing/web-apps', [WebAppsPricingController::class, 'index'])->name('pricing.web-apps');
Route::get('/pricing/animation', [AnimationPricingController::class, 'index'])->name('pricing.animation');
Route::get('/pricing/video-editing', [VideoEditingPricingController::class, 'index'])->name('pricing.video-editing');
Route::get('/pricing/digital-marketing', [DigitalMarketingPricingController::class, 'index'])->name('pricing.digital-marketing');
Route::get('/pricing/graphic-design', [GraphicDesignPricingController::class, 'index'])->name('pricing.graphic-design');
Route::get('/pricing/umkm', [UmkmPricingController::class, 'index'])->name('pricing.umkm');

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

// Sitemap route
Route::get('sitemap.xml', function() {
    $content = view('sitemap');
    return response($content)->header('Content-Type', 'application/xml');
});