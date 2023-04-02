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

Route::get('/', [DesenvolvedorController::class, 'index'])->name('desenvolvedor.index');
Route::get('/create', [DesenvolvedorController::class, 'create'])->name('desenvolvedor.create');
Route::get('/{id}', [DesenvolvedorController::class, 'show'])->name('desenvolvedor.show');
Route::get('/{id}/edit', [DesenvolvedorController::class, 'edit'])->name('desenvolvedor.edit');

Route::post('/', [DesenvolvedorController::class, 'store'])->name('desenvolvedor.store');
Route::put('/{id}', [DesenvolvedorController::class, 'update'])->name('desenvolvedor.update');
Route::delete('/{id}', [DesenvolvedorController::class, 'destroy'])->name('desenvolvedor.destroy');

Route::get('/nivel', [NivelController::class, 'index'])->name('nivel.index');
Route::get('/nivel/create', [NivelController::class, 'create'])->name('nivel.create');
Route::get('/nivel/{id}', [NivelController::class, 'show'])->name('nivel.show');
Route::get('/nivel/{id}/edit', [NivelController::class, 'edit'])->name('nivel.edit');

Route::post('/nivel', [NivelController::class, 'store'])->name('nivel.store');
Route::put('/nivel/{id}', [NivelController::class, 'update'])->name('nivel.update');
Route::delete('/nivel/{id}', [NivelController::class, 'destroy'])->name('nivel.destroy');
