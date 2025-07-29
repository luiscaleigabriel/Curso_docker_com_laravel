<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/**
 *
 * Auth
 */
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/register', [UserController::class, 'index'])->name('user.index');
Route::post('/register', [UserController::class, 'store'])->name('user.store');

/**
 *
 * Tasks
 */
Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
