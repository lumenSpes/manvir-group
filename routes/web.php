<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homepage');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/contact-us', function () {
    return view('contact_us');
});

Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});

Route::get('/terms-and-condetions', function () {
    return view('terms_and_condetions');
});
