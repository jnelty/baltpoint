<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', fn () => view('auth.login'))
    ->name('login.form');

Route::get('/register', fn () => view('auth.register'))
    ->name('register.form');

Route::post('/login', [UserController::class, 'login'])
    ->name('login');

Route::post('/register', [UserController::class, 'register'])
    ->name('register');

Route::post('/logout', [UserController::class, 'logout'])
    ->name('logout');


Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
