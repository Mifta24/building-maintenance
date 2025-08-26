<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\Auth\ExhibitionRegistrationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PartnerController;

// USER PAGES
Route::controller(PagesController::class)->name('pages.')->group(function () {
    Route::get('/', 'landing')->name('landing');
    Route::get('/about', 'about')->name('about');
    Route::get('/exhibit', 'exhibit')->name('exhibit');
    Route::get('/visit', 'visit')->name('visit');
    Route::get('/partners', 'partners')->name('partners');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/services', 'services')->name('services');
});

// articles
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

// exhibition
Route::prefix('exhibition')->group(function () {
    Route::get('/registration', [ExhibitionRegistrationController::class, 'show'])->name('exhibitionRegistration.show');
    Route::post('/registration', [ExhibitionRegistrationController::class, 'send'])->name('exhibitionRegistration.send');
    Route::view('/registration/confirm', [ExhibitionRegistrationController::class, 'confirm'])->name('exhibitionRegistrationMailConfirm');
});


// ADMIN
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['verified'])->name('index');


    Route::resource('article', ArticleController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('partner', PartnerController::class);
});
