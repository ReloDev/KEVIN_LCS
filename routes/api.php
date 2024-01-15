<?php

use App\Http\Controllers\etudiantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

//creationde l api
Route::get('/Etudiant/create',[etudiantController::class,'create'])->name('Etudiant.create');
Route::get('Etudiant/index',[etudiantController::class,'index'])->name('Etudiant.index');
Route::post('Etudiant/store',[etudiantController::class,'store'])->name('Etudiant.store');
Route::get('Etudiant/show/{id}',[etudiantController::class,'show'])->name('Etudiant.show');
Route::get('Etudiant/edit/{id}',[etudiantController::class,'edit'])->name('Etudiant.edit');
Route::get('Etudiant/delete/{id}',[etudiantController::class,'destroy'])->name('Etudiant.destroy');
Route::post('Etudiant/update/{id}',[etudiantController::class,'update'])->name('Etudiant.update');
