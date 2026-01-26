@props(['title'])

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ html_entity_decode($title ?? config('app.name')) }}</title>

    <link rel="canonical" href="{{ url()->current() }}">
    @stack('head')

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/d0c003e79c.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="bg-[--body-background-layered-color]">
    <div class="flex justify-between items-center gap-12 max-w-[1200px] mx-auto my-0 px-3 py-0">
        <a href="{{ route('home') }}" class="text-xl font-semibold">
            Semmetje
        </a>
    </div>
</nav>

<main>
    {{ $slot }}
</main>

<footer>

</footer>

</body>
