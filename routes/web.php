<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/services', function () {
    return view('pages.service');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/team', function () {
    return view('pages.team');
});
// Route::get('/newsletter', function () {
//     return view('pages.newsletter');
// });