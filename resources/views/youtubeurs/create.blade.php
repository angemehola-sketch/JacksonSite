@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
    <h1>Ajouter un membre</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/youtubeurs" method="POST">
        @csrf

        <div>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom') }}">
        </div>

        <div>
            <label for="role">Rôle</label>
            <input type="text" id="role" name="role" value="{{ old('role') }}">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>
        </div>

        <a href="/youtubeurs">← Annuler</a>
        <button type="submit">Ajouter</button>
    </form>
@endsection