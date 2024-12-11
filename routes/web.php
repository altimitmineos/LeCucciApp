<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
})->name('home');

Route::get('/about-us', function () {
    return view('AboutUs');
})->name('about_us');

Route::get('/gallery', function () {
    return view('Gallery');
})->name('gallery');

Route::get('/our-services', function () {
    return view('OurService');
})->name('OurServices');

