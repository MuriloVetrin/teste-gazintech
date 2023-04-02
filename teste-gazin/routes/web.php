<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesenvolvedorController;
use App\Http\Controllers\NivelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/desenvolvedores/{id}', [DesenvolvedorController::class, 'show'])->where('id', '[0-9]+');

Route::get('/', [DesenvolvedorController::class, 'index'])->name('desenvolvedors.index');
Route::get('/create', [DesenvolvedorController::class, 'create'])->name('desenvolvedors.create');
Route::get('/{id}/edit', [DesenvolvedorController::class, 'edit'])->name('desenvolvedors.edit');

Route::post('/', [DesenvolvedorController::class, 'store'])->name('desenvolvedors.store');
Route::put('/{id}', [DesenvolvedorController::class, 'update'])->name('desenvolvedors.update');
Route::delete('/{id}', [DesenvolvedorController::class, 'destroy'])->name('desenvolvedors.destroy');

Route::get('/nivels', [NivelController::class, 'index'])->name('nivels.index');
Route::get('/nivels/create', [NivelController::class, 'create'])->name('nivels.create');
Route::get('/nivels/{id}', [NivelController::class, 'show'])->name('nivels.show');
Route::get('/nivels/{id}/edit', [NivelController::class, 'edit'])->name('nivels.edit');

Route::post('/nivels', [NivelController::class, 'store'])->name('nivels.store');
Route::put('/nivels/{id}', [NivelController::class, 'update'])->name('nivels.update');
Route::delete('/nivels/{id}', [NivelController::class, 'destroy'])->name('nivels.destroy');

Route::get('/{id}', [DesenvolvedorController::class, 'show'])->name('desenvolvedors.show');
