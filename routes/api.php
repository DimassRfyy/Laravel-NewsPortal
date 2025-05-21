<?php

use App\Http\Controllers\Api\ArticleNewsController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/articles', [ArticleNewsController::class,'index']);
Route::get('/article/{articleNews:slug}', [ArticleNewsController::class,'show']);

Route::get('/categories', [CategoryController::class,'index'])->name('categories.index');
Route::get('/category/{category:slug}',[CategoryController::class,'show']);