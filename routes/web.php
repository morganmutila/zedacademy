<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/',  [HomeController::class, '__invoke'])->name('home');

Route::get('/search',  [HomeController::class, '__invoke'])->name('search');

Route::get('/browse',  [HomeController::class, '__invoke'])->name('browse');

Route::view('/dashboard', 'dashboard')->middleware('auth');

Route::view('/profile/edit', 'profile.edit')->middleware('auth')->name('profile.edit');
Route::view('/profile/password', 'profile.password')->middleware('auth');