<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


Route::get('/', [RegisterController::class, 'create']);

Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::get('/login', [LoginController::class, 'index']);

Route::post('/check', [LoginController::class, 'check'])->name('check');