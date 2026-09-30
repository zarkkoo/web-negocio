<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/services/aero', function () {
    return view('pages.services.aero');
});

Route::get('/services/performance', function () {
    return view('pages.services.performance');
});

Route::get('/services/interior', function () {
    return view('pages.services.interior');
});

Route::get('/services/bikes', function () {
    return view('pages.services.bikes');
});