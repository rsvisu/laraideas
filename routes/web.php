<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ==== Rutas Publicas ====

// Pagina de inicio
Route::get('/', function () {
    // Si esta autenticado devolvemos esta vista
    if (auth()->check()) {
        return view('welcomeAuth');
    }
    // Si no, esta otra
    return view('welcomeGuest');
})->name('welcome');

// Cambio de idioma
Route::get('/lang/{locale}', [LanguageController::class, 'setLanguage'])->name('lang.switch');

// ==== Rutas Autenticadas ====
Route::middleware('auth')->group(function () {
    // Ideas
    // (se podria cambiar por 'Route::resource("/ideas", IdeaController::class);'
    // pero he preferido dejarlo asi, más explicito, para dejarlo más claro para mi aprendizaje)
    Route::get('/ideas/create', [IdeaController::class, 'create'])->name('ideas.create');
    Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');
    Route::patch('/ideas/{id}', [IdeaController::class, 'update'])->name('ideas.update');
    Route::get('/ideas/{id}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');
    Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
    Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas.index');

    // Dashboard
    Route::get('/dashboard', function () {
        // Desactivación de ruta dashboard redirigiendo a /.
        return redirect('/');
        // return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ==== Importaciones ====

// Auth
require __DIR__.'/auth.php';
