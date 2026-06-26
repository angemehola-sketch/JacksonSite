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
            'image'       => 'string|nullable'
        ]);

        Youtubeur::create([
            'nom'         => $request->nom,
            'role'        => $request->role,
            'description' => $request->description,
            'image'       => $request->image
        ]); 

        return redirect('/youtubeurs');
    }

    public function edit($id)
    {
        $youtubeur = Youtubeur::findOrFail($id);
        return view('youtubeurs.edit', compact('youtubeur'));
    }

    public function update(Request $request, $id)
    {
        $youtubeur = Youtubeur::findOrFail($id);

        $request->validate([
            'nom'         => 'required|min:2',
            'role'        => 'required|min:2',
            'description' => 'required|min:5',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $youtubeur->update($request->all());

        return redirect('/youtubeurs/' . $id);
    }

    public function destroy($id)
    {
        $youtubeur = Youtubeur::findOrFail($id);
        $youtubeur->delete();
        return redirect('/youtubeurs');
    }
}