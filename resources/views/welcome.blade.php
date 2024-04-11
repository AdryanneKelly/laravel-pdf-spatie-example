<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body
    class="antialiased flex flex-row justify-center items-center bg-gradient-to-tr from-black to-red-600 bg-no-repeat min-h-screen">
    <div>
        <div class="text-white text-center">
            <h1 class="text-4xl font-bold mb-5">Spatie Laravel PDF - Teste</h1>
            <a href="{{ route('pdf') }}"
                class="bg-white text-xl text-red-600 font-bold rounded-xl px-4 py-2 shadow-xl border-4">Gerar PDF</a>
        </div>
    </div>


    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
