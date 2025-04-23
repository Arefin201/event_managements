<?php
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('dashboard'); 

// User Controller
Route::group(['middleware'=>'guest'],function(){
    // Registration
    Route::get('/sign-up', [UserController::class, 'signup'])->name('signup'); 
    Route::post('/sign-up', [UserController::class, 'signupPost'])->name('signupPost')->middleware('throttle:5,1'); 
    // Login
    Route::get('/sign-in', [UserController::class, 'login'])->name('login'); 
    Route::post('/sign-in', [UserController::class, 'loginPost'])->name('loginPost')->middleware('throttle:5,1'); 

});


