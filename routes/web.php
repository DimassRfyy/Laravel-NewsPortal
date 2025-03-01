<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/hashtag', [HomeController::class, 'hashtag'])->name('hashtag');
Route::get('writer', [HomeController::class, 'writer'])->name('writer');
Route::get('/details', [HomeController::class, 'details'])->name('details');
Route::get('/search', [HomeController::class, 'search'])->name('search');
