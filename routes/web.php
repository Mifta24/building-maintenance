<?php

use App\Http\Controllers\User\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

// USER


// ADMIN
