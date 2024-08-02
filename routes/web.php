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
