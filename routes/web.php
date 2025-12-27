<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Erp\AuthController;
use App\Http\Controllers\Erp\DashboardController;

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
    ->name('erp.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        // contoh future modules
        // Route::get('/projects', ...)->name('projects');
        // Route::get('/finance', ...)->name('finance');
        // Route::get('/hr', ...)->name('hr');
    });
