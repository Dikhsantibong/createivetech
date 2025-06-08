<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;


Route::get('/', function () {
    return view('home');
});