<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


/**
 *
 * Auth
 */
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
