@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
    <div class="membre-detail">
        <h1>{{ $youtubeur->nom }}</h1>
        <p class="role">{{ $youtubeur->role }}</p>
        <p>{{ $youtubeur->description }}</p>

        <div class="actions">
            <a href="/youtubeurs">← Retour</a>

            <form action="/youtubeurs/{{ $youtubeur->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Supprimer ce membre ?')">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
@endsection