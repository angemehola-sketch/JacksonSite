<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeurController;

Route::get('/', [YoutubeurController::class, 'index']);