<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Middleware\EnsureUserIsLoggedIn;

Route::view('/', 'index')
        ->name('home');

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware(['auth'])
        ->name('dashboard');

Route::get('/dashboard/rooms', [DashboardController::class, 'rooms'])
        ->middleware(['auth'])
        ->name('view-rooms');
?>