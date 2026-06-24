@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <header>
        <h1>Les Jacksons</h1>
        <p>Un collectif français réunissant plusieurs créateurs et youtubeurs autour de diverses passions communes.</p>
    </header>

    <h2>Membres du collectif</h2>

    <div class="membres-grid">
        @forelse($youtubeurs as $youtubeur)
            <a href="/youtubeurs/{{ $youtubeur->id }}" class="carte-membre">
                <h3>{{ $youtubeur->nom }}</h3>
                <p class="role">{{ $youtubeur->role }}</p>
                <p>{{ $youtubeur->description }}</p>
            </a>
        @empty
            <p>Aucun membre n'a encore été ajouté.</p>
        @endforelse
    </div>
@endsection