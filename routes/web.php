<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeurController;

Route::get('/', function () {
    return redirect('/youtubeurs');
});

Route::get('/youtubeurs', [YoutubeurController::class, 'index']);
Route::get('/youtubeurs/create', [YoutubeurController::class, 'create']);
Route::post('/youtubeurs', [YoutubeurController::class, 'store']);
Route::get('/youtubeurs/{id}', [YoutubeurController::class, 'show']);
Route::delete('/youtubeurs/{id}', [YoutubeurController::class, 'destroy']);