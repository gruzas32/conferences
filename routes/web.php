/<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', [\App\Http\Controllers\ConferenceController::class, 'index'])->name('conferences.index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\mainScreenController::class, 'index'])->name('home');


// conference routes
Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/conferences/{conference}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
Route::delete('/conferences/{conference}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
