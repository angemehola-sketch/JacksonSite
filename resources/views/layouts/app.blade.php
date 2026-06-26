<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les Jacksons</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('styles')
</head>
<body>

    <nav>
        <a href="/youtubeurs">Les Jacksons</a>
        <a href="/youtubeurs/create">+ Ajouter un membre</a>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>