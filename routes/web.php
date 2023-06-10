<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======

Route::get('/home', function () {
    return view('demo/home');
});

Route::get('/about', function () {
    return view('demo/about');
});

Route::get('/contact', function () {
    return view('demo/contact');
});

Route::get('/product', function () {
    return view('demo/product');
});

Route::get('/service', function () {
    return view('demo/service');
});

Route::get('/login', function () {
    return view('demo/login');
});

Route::get('/register', function () {
    return view('demo/register');
});

Route::get('/category', function () {
    return view('demo/category');
});

Route::get('/cart', function () {
    return view('demo/cart');
});

Route::get('/offer', function () {
    return view('demo/offer');
});
>>>>>>> origin/main
