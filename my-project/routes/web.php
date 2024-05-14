<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "try";
});



Route::get('/login',[UserController::class,'login']);


Route::get('/register',[UserController::class,'register']);


