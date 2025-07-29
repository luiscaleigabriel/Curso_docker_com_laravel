<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/**
 *
 * Auth
 */
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/register', [UserController::class, 'index'])->name('user.index');
    Route::post('/register', [UserController::class, 'store'])->name('user.store');
});




/**
 *
 * Tasks
 */
Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
});

