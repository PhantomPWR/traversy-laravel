<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/posts', function () {
    return view('posts.index');
});
