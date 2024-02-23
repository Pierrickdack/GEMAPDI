<?php

use App\Models\Utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\MaterielController;




Route::get('/', function () {
    return view('auth.auth-login');
})->name('connexion');

Route::get('/Inscription', function () {
    return view('auth.auth-register');
})->name('inscription');

Route::get('/Accueil', function () {
    return view('index');
})->name('dashboard');

// Route::get('/Materiels', function () {
//     return view('tables.export-table');
// })->name('tableau');


Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/Accueil', [UserController::class, 'login'])->name('login');

Route::post('/Deconnexion', [UserController::class, 'logout'])->name('logout');

// Route::get('/Accueill', [UserController::class, 'showDashboard'])->name('dashboard');



Route::post('/enregistrer-materiel', [MaterielController::class, 'store'])->name('materiel.store');

Route::get('/materiels', [MaterielController::class, 'index'])->name('materiels.index');
Route::delete('/materiels/{materiel}', [MaterielController::class, 'destroy'])->name('materiels.destroy');
Route::post('/materiels/emprunt', [MaterielController::class, 'emprunt'])->name('materiels.emprunt');

Route::get('/emprunts/create', [EmpruntController::class, 'create'])->name('emprunts.create');
