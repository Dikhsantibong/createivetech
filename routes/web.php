<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;


Route::get('/', function () {
    return view('home');
});

Route::get('/portfolio/{type}', [PortfolioController::class, 'show']);

Route::get('/layanan/pengembangan-web-dan-mobile', [ServiceController::class, 'mobile']);
Route::get('/layanan/konsultasi-it', [ServiceController::class, 'consulting']);
Route::get('/layanan/branding', [ServiceController::class, 'branding']);
Route::get('/layanan/desain-grafis', [ServiceController::class, 'desain']);
Route::get('/layanan/editing-video', [ServiceController::class, 'editing']);
Route::get('/layanan/model-3d', [ServiceController::class, 'animasi']);
Route::get('/layanan/animator', [ServiceController::class, 'animasi']);
