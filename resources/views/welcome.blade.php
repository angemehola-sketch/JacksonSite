<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les Jacksons</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] p-6 lg:p-12 min-h-screen flex flex-col items-center">
    
    <header class="w-full max-w-6xl text-center my-8">
        <h1 class="text-4xl font-bold mb-3 tracking-tight">Les Jacksons</h1>
        <p class="text-[#706f6c] dark:text-[#A1A09A] max-w-xl mx-auto">
            Un collectif français réunissant plusieurs créateurs et youtubeurs autour de diverses passions communes.
        </p>
    </header>

    <main class="w-full max-w-6xl">
        <h2 class="text-2xl font-semibold mb-6 border-b border-gray-200 dark:border-zinc-800 pb-2">
            Membres du collectif
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @forelse($youtubeurs as $youtubeur)
                <div class="bg-white dark:bg-[#161615] rounded-lg p-5 text-center shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-[#19140015] dark:border-[#3E3E3A]">
                    <div class="space-y-3">
                        <h3 class="font-bold text-lg">{{ $youtubeur->nom }}</h3>
                        <p class="text-sm text-gray-500 dark:text-[#A1A09A]">{{ $youtubeur->role }}</p>
                        <p class="text-sm text-gray-700 dark:text-[#EDEDEC]">{{ $youtubeur->description }}</p>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-500 italic">Aucun membre n'a encore été ajouté.</p>
            @endforelse
        </div>
    </main>
</body>
</html>