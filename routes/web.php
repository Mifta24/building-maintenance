<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\PagesController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/shared/auth.php';



// USER
Route::get('/', [PagesController::class, 'landing'])->name('landing');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/exhibit', [PagesController::class, 'exhibit'])->name('exhibit');
Route::get('/visit', [PagesController::class, 'visit'])->name('visit');
Route::get('/mediaPartners', [PagesController::class, 'mediaPartners'])->name('mediaPartners');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');


// ADMIN
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
