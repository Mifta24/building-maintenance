<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PagesController;
use App\Http\Controllers\User\Auth\ExhibitionRegistrationController;

Route::get('/', [PagesController::class, 'landing'])->name('landing');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/exhibit', [PagesController::class, 'exhibit'])->name('exhibit');
Route::get('/visit', [PagesController::class, 'visit'])->name('visit');
Route::get('/partners', [PagesController::class, 'partners'])->name('partners');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');

// EXHIBITION
Route::get('/exhibition-registration', [ExhibitionRegistrationController::class, 'show'])->name('exhibitionRegistration.show');
Route::post('/exhibition-registration', [ExhibitionRegistrationController::class, 'send'])->name('exhibitionRegistration.send');
Route::view('/exhibition-registration-mail-confirm', 'user.emails.exhibition-registration-mail-confirm')->name('exhibitionRegistrationMailConfirm');
