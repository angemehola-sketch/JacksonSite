<?php

namespace App\Http\Controllers;

use App\Models\Youtubeur;

class YoutubeurController extends Controller
{
    public function index()
    {
        $youtubeurs = Youtubeur::all();
        return view('welcome', compact('youtubeurs'));
    }
}