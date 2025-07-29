<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/**
 *
 * Auth
 */
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');

Route::get('/register', [UserController::class, 'index'])->name('user.index');
