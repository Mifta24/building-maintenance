<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\ExhibitionRegistrationController;

Route::prefix('auth')->name('auth.')->group(function () {


    // Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    // Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

    // Route::post('/login', [AuthController::class, 'login'])->name('login');
    // Route::post('/register', [AuthController::class, 'register'])->name('register');
});
