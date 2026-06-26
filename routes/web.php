<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeurController;

Route::get('/', function () {
    return redirect('/youtubeurs');
});

Route::get('/youtubeurs', [YoutubeurController::class, 'index']);
Route::get('/youtubeurs/create', [YoutubeurController::class, 'create']);
Route::post('/youtubeurs', [YoutubeurController::class, 'store']);

// Affiche le formulaire pré-rempli pour modifier un youtubeur
Route::get('/youtubeurs/{id}/edit', [YoutubeurController::class, 'edit']);

// Reçoit et traite les modifications
Route::put('/youtubeurs/{id}', [YoutubeurController::class, 'update']);

Route::get('/youtubeurs/{id}', [YoutubeurController::class, 'show']);
Route::delete('/youtubeurs/{id}', [YoutubeurController::class, 'destroy']);