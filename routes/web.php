<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/forms', [FormsController::class, 'Forms']);
Route::get('/create', [FormsController::class, 'Create']);


Route::get('/slide', [SlideController::class, 'Slide']);
Route::get('/about', [AboutController::class, 'About']);
Route::get('/contact', [ContactController::class, 'Contact']);
