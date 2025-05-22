<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/users', [UserController::class,'getUser']);
Route::get('/singleUser/{id}', [UserController::class,'getsingleUser']);
Route::post('/users/create', [UserController::class,'creatUser']);
Route::put('/users/{id}/update', [UserController::class,'updateUser']);
Route::delete('/users/{id}/delete', [UserController::class,'deleteUser']);

