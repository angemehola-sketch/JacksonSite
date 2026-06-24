<?php

namespace App\Http\Controllers;

use App\Models\Youtubeur;
use Illuminate\Http\Request;

class YoutubeurController extends Controller
{
    // Liste de tous les youtubeurs
    public function index()
    {
        $youtubeurs = Youtubeur::all();
        return view('welcome', compact('youtubeurs'));
    }

    // Détail d'un youtubeur
    public function show($id)
    {
        $youtubeur = Youtubeur::findOrFail($id);
        return view('youtubeurs.show', compact('youtubeur'));
    }

    // Formulaire de création
    public function create()
    {
        return view('youtubeurs.create');
    }

    // Enregistrer en base de données
    public function store(Request $request)
    {
        $request->validate([
            'nom'         => 'required|min:2',
            'role'        => 'required|min:2',
            'description' => 'required|min:5',
        ]);

        Youtubeur::create([
            'nom'         => $request->nom,
            'role'        => $request->role,
            'description' => $request->description,
        ]);

        return redirect('/youtubeurs');
    }

    // Supprimer un youtubeur
    public function destroy($id)
    {
        $youtubeur = Youtubeur::findOrFail($id);
        $youtubeur->delete();
        return redirect('/youtubeurs');
    }
}