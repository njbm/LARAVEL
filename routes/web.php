<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;



// Route::get('/aboutt', 'AboutController@About');

Route::get('/about', [AboutController::class, 'About']);

Route::get('/contact', [ContactController::class, 'Contact']);

Route::get('/service', [ServiceController::class, 'Service']);

Route::get('/product', [ProductController::class, 'Product']);






Route::get('/', function () {
    return view('frontend.home');
});



