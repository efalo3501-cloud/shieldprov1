<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/product/aquashield-pro-500', function () {
    return view('product-detail');
});

Route::get('/services', function () {
    return view('services');
});


