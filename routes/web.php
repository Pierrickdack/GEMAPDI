<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('auth.auth-login');
})->name('connexion');

Route::get('/Inscription', function () {
    return view('auth.auth-register');
})->name('inscription');

Route::get('/Accueil', function () {
    return view('index');
})->name('dashboard');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/Accueill', [UserController::class, 'login'])->name('login');

Route::post('/Deconnexion', [UserController::class, 'logout'])->name('logout');