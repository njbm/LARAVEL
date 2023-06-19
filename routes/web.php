<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\SlideController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/forms', [FormsController::class, 'Forms']);
Route::get('/slide', [SlideController::class, 'Slide']);
