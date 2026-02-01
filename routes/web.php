<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Pages
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    // Desactivación de ruta dashboard redirigiendo a /.
    return redirect('/');
    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Locale
Route::get('/lang/{locale}', [LanguageController::class, 'setLanguage'])->name('lang.switch');

// Ideas
Route::middleware('auth')->group(function () {
    Route::get('/idea', [IdeaController::class, 'create'])->name('ideas.create');
    Route::post('/idea', [IdeaController::class, 'store'])->name('ideas.store');
    Route::patch('/idea/{id}', [IdeaController::class, 'update'])->name('ideas.update');
    Route::get('/idea/{id}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');
    Route::delete('/idea/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
    Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas.index');
});


// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Auth
require __DIR__.'/auth.php';
