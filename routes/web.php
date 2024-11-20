<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\EnsureUserIsLoggedIn;

Route::view('/', 'index')
        ->middleware(EnsureUserIsLoggedIn::class);

Route::get('/login', [LoginController::class, 'index'])
        ->middleware(EnsureUserIsLoggedIn::class);

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

// require __DIR__.'/auth.php';
?>