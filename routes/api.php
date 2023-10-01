<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Get Api for show user
Route::get('/users/{id?}', [UserApiController::class, 'showUser']);

//Post Api for add single user
Route::post('/add-user', [UserApiController::class, 'addUser']);

//Post Api for add multiple user
Route::post('/add-m-user', [UserApiController::class, 'addMultipleUser']);

//Put Api for Update user
Route::put('/update-user/{id}', [UserApiController::class, 'updateUser']);

//Patch Api for Update user
Route::patch('/update-s-record/{id}', [UserApiController::class, 'updateSingleRecord']);

//Delete Api for Delete user
Route::delete('/delete-user/{id}', [UserApiController::class, 'deleteUser']);

//Delete Api with json for Delete user
Route::delete('/delete-user-json', [UserApiController::class, 'deleteUserJson']);
