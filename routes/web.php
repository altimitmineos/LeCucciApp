<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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


Route::get('/read-more', function () {
    return view('ReadMore');
})->name('ReadMore');

Route::get('/contact-us', function(){
    return view('ContactUs');
})->name('ContactUs');

Route::get('/contact', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');

