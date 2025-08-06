<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\LandingController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/shared/auth.php';

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

// USER


// ADMIN
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
