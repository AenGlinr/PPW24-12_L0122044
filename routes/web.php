<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/animeHome', [HomeController::class, 'index'])->name('home');
Route::get('/anime', [AnimeController::class, 'index'])->name('anime.index');
Route::get('/anime/create', [AnimeController::class, 'create'])->name('anime.create');
Route::post('/anime', [AnimeController::class, 'store'])->name('anime.store');
Route::get('/anime/{anime}/characters', [CharacterController::class, 'index'])->name('anime.characters');

// Login
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//crud photo
Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');
Route::get('/photos/create', [PhotoController::class, 'create'])->name('photos.create');
Route::post('/photos', [PhotoController::class, 'store'])->name('photos.store');
Route::get('/photos/{id}', [PhotoController::class, 'show'])->name('photos.show');
Route::get('/photos/{id}/edit', [PhotoController::class, 'edit'])->name('photos.edit');
Route::put('/photos/{id}', [PhotoController::class, 'update'])->name('photos.update');
Route::delete('/photos/{id}', [PhotoController::class, 'destroy'])->name('photos.destroy');
