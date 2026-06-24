<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeurController;

// Page d'accueil 
Route::get('/', function () {
    return redirect('/youtubeurs');
});

// Liste des youtubeurs
Route::get('/youtubeurs', [YoutubeurController::class, 'index']);

// Formulaire de création 
Route::get('/youtubeurs/create', [YoutubeurController::class, 'create']);

// Enregistrer un nouveau youtubeur
Route::post('/youtubeurs', [YoutubeurController::class, 'store']);

// Détail d'un youtubeur
Route::get('/youtubeurs/{id}', [YoutubeurController::class, 'show']);

// Suppression d'un youtubeur
Route::delete('/youtubeurs/{id}', [YoutubeurController::class, 'destroy']);
