<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Les Jacksons</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
                @layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif;--spacing:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--color-black:#000;--color-white:#fff}}
                @layer base{*,:after,:before{box-sizing:border-box;margin:0;padding:0}html{line-height:1.5;font-family:var(--font-sans)}}
            </style>
        @endif
        
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
                @foreach($youtubeurs as $youtubeur)
                    <div class="bg-white dark:bg-[#161615] rounded-lg p-5 text-center shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-[#19140015] dark:border-