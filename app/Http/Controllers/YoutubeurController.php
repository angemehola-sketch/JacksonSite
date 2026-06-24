<?php

namespace App\Http\Controllers;

use App\Models\Youtubeur;
use Illuminate\Http\Request;

class YoutubeurController extends Controller
{
    public function index()
    {
        $youtubeurs = Youtubeur::all();
        return view('youtubeurs.index', compact('youtubeurs'));
    }

    public function show($id)
    {
        $youtubeur = Youtubeur::findOrFail($id);
        return view('youtubeurs.show', compact('youtubeur'));
    }

    public function create()
    {
        return view('youtubeurs.create');
    }

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

    public function destroy($id)
    {
        $youtubeur = Youtubeur::findOrFail($id);
        $youtubeur->delete();
        return redirect('/youtubeurs');
    }
}