<?php

use App\Http\Controllers\etudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ProfesseurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/cours', function () {
    return view('course');
})->name('cours');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashyout');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('Filiere/create',[FiliereController::class,'create'])->name('Filiere.create');
Route::get('Filiere/index',[FiliereController::class,'index'])->name('Filiere.index');
Route::post('Filiere/store',[FiliereController::class,'store'])->name('Filiere.store');
Route::get('Filiere/show/{id}',[FiliereController::class,'show'])->name('Filiere.show');
Route::get('Filiere/edit/{id}',[FiliereController::class,'edit'])->name('Filiere.edit');
Route::get('Filiere/delete/{id}',[FiliereController::class,'destroy'])->name('Filiere.destroy');
Route::post('Filiere/update/{id}',[FiliereController::class,'update'])->name('Filiere.update');


Route::get('Etudiant/index',[etudiantController::class,'index'])->name('Etudiant.index');
Route::post('Etudiant/store',[etudiantController::class,'store'])->name('Etudiant.store');
Route::get('Etudiant/show/{id}',[etudiantController::class,'show'])->name('Etudiant.show');
Route::get('Etudiant/edit/{id}',[etudiantController::class,'edit'])->name('Etudiant.edit');
Route::get('Etudiant/delete/{id}',[etudiantController::class,'destroy'])->name('Etudiant.destroy');
Route::post('Etudiant/update/{id}',[etudiantController::class,'update'])->name('Etudiant.update');
Route::post('Etudiant/oec/{id}',[etudiantController::class,'oec'])->name('Etudiant.oec');
Route::post('Etudiant/nec/{id}',[etudiantController::class,'nec'])->name('Etudiant.nec');
Route::post('Etudiant/oac/{id}',[etudiantController::class,'oac'])->name('Etudiant.oac');
Route::post('Etudiant/nac/{id}',[etudiantController::class,'nac'])->name('Etudiant.nac');

Route::get('Professeur/index',[ProfesseurController::class,'index'])->name('Professeur.index');
Route::post('Professeur/store',[ProfesseurController::class,'store'])->name('Professeur.store');
Route::get('Professeur/show/{id}',[ProfesseurController::class,'show'])->name('Professeur.show');
Route::get('Professeur/edit/{id}',[ProfesseurController::class,'edit'])->name('Professeur.edit');
Route::get('Professeur/delete/{id}',[ProfesseurController::class,'destroy'])->name('Professeur.destroy');
Route::post('Professeur/update/{id}',[ProfesseurController::class,'update'])->name('Professeur.update');
Route::post('Professeur/oec/{id}',[ProfesseurController::class,'oec'])->name('Professeur.oec');
Route::post('Professeur/nec/{id}',[ProfesseurController::class,'nec'])->name('Professeur.nec');
Route::post('Professeur/oac/{id}',[ProfesseurController::class,'oac'])->name('Professeur.oac');
Route::post('Professeur/nac/{id}',[ProfesseurController::class,'nac'])->name('Professeur.nac');
});

require __DIR__.'/auth.php';
Route::get('/Etudiant/create',[etudiantController::class,'create'])->name('Etudiant.create');
Route::get('Etudiant/encours',[etudiantController::class,'encours'])->name('Etudiant.encours');
Route::get('Etudiant/accepte',[etudiantController::class,'accepte'])->name('Etudiant.accepte');
Route::get('Etudiant/refuse',[etudiantController::class,'refuse'])->name('Etudiant.refuse');




Route::get('Professeur/create',[ProfesseurController::class,'create'])->name('Professeur.create');
Route::get('Professeur/encours',[ProfesseurController::class,'encours'])->name('Professeur.encours');
Route::get('Professeur/accepte',[ProfesseurController::class,'accepte'])->name('Professeur.accepte');
Route::get('Professeur/refuse',[ProfesseurController::class,'refuse'])->name('Professeur.refuse');

//aa