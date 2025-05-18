<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{category:slug}', [HomeController::class, 'category'])->name('category');
Route::get('/hashtag/{hashtag:slug}', [HomeController::class, 'hashtag'])->name('hashtag');
Route::get('/writer/{user:id}', [HomeController::class, 'writer'])->name('writer');
Route::get('/details', [HomeController::class, 'details'])->name('details');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
