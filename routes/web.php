<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//author routes
Route::resource('authors',AuthorController::class);

//categories routes
Route::resource('categories',CategoryController::class);

//books routes
Route::resource('books',BookController::class);

