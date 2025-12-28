<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Erp\AuthController;
use App\Http\Controllers\Erp\DashboardController;
use App\Http\Controllers\Erp\PaymentController;

/*
|--------------------------------------------------------------------------
| PUBLIC PAGES (COMPANY PROFILE)
|--------------------------------------------------------------------------
*/
Route::view('/', 'beranda')->name('home');

Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/services', 'pages.service')->name('services');
Route::view('/team', 'pages.team')->name('team');
Route::view('/contact', 'pages.contact')->name('contact');

/*
|--------------------------------------------------------------------------
| ERP AUTHENTICATION
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('erp.login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('erp.login.submit');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('erp.logout');

/*
|--------------------------------------------------------------------------
| ERP DASHBOARD (INTERNAL ONLY)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])
    ->prefix('dashboard')
    ->name('erp.dashboard.')
    ->group(function () {

        // dashboard utama
        Route::get('/', [DashboardController::class, 'index'])
            ->name('index');

        // invoice / payment
        Route::get('/invoice', [PaymentController::class, 'index'])
            ->name('invoice.index');
    });

