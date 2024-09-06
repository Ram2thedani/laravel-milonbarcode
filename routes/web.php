<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'index']);
Route::get('/user/adduser', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);
