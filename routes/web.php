<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivreController;

Route::get('/', [LivreController::class, 'index'])->name('livres.index');
Route::post('/livres', [LivreController::class, 'store'])->name('livres.store');
Route::delete('/livres/{livre}', [LivreController::class, 'destroy'])->name('livres.destroy');
Route::get('/livres/{livre}/edit', [LivreController::class, 'edit'])->name('livres.edit');
Route::put('/livres/{livre}', [LivreController::class, 'update'])->name('livres.update');
