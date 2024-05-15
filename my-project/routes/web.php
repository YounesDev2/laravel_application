<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "try";
});



Route::get('/login',[UserController::class,'login']);
Route::get('/register',[UserController::class,'register']);
Route::get('/forgot_password',[UserController::class,'forgot_password']);
Route::get('/reset_password',[UserController::class,'reset_password']);

Route::post('/register',[UserController::class,'saveuser'])->name('auth.register');
