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

//Crud Desenvolvedor
Route::get('/', function () { return redirect('/desenvolvedor'); });
Route::get('/desenvolvedor', [DesenvolvedorController::class, 'index'])->name('desenvolvedors.index');
Route::get('/desenvolvedor/create', [DesenvolvedorController::class, 'create'])->name('desenvolvedors.create');
Route::get('/desenvolvedor/{id}', [DesenvolvedorController::class, 'show'])->name('desenvolvedors.show');
//Route::get('/{id}', [DesenvolvedorController::class, 'show'])->where('id', '[0-9]+');
Route::get('/desenvolvedor/{id}/edit', [DesenvolvedorController::class, 'edit'])->name('desenvolvedors.edit');

Route::post('/desenvolvedor', [DesenvolvedorController::class, 'store'])->name('desenvolvedors.store');
Route::put('/desenvolvedor/{id}', [DesenvolvedorController::class, 'update'])->name('desenvolvedors.update');
Route::delete('/desenvolvedor/{id}', [DesenvolvedorController::class, 'destroy'])->name('desenvolvedors.destroy');

//Crud Nível
Route::get('/nivel', [NivelController::class, 'index'])->name('niveis.index');
Route::get('/nivel/create', [NivelController::class, 'create'])->name('niveis.create');
Route::get('/nivel/{id}', [NivelController::class, 'show'])->name('niveis.show');
Route::get('/nivel/{id}/edit', [NivelController::class, 'edit'])->name('niveis.edit');

Route::post('/nivel', [NivelController::class, 'store'])->name('niveis.store');
Route::put('/nivel/{id}', [NivelController::class, 'update'])->name('niveis.update');
Route::delete('/nivel/{id}', [NivelController::class, 'destroy'])->name('niveis.destroy');

//Sobre
Route::get('/sobre', function () { return view('sobre'); });
