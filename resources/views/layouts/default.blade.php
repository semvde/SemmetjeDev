@props(['title'])

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ html_entity_decode($title ?? config('app.name') . " • Full-stack Developer") }}</title>

    <link rel="canonical" href="{{ url()->current() }}">
    @stack('head')

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/d0c003e79c.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="bg-[--body-background-layered-color] shadow shadow-gray-800">
    <div class="flex justify-between items-center gap-12 max-w-[1200px] mx-auto my-0 px-3 py-0">
        <a href="{{ route('home') }}" class="text-2xl font-semibold">
            Semmetje
        </a>
        <ul class="flex gap-12 font-medium">
            <li class="inline-block py-5">
                <a href="">About</a>
            </li>
            <li class="inline-block py-5">
                <a href="">Projects</a>
            </li>
            <li class="inline-block py-5">
                <a href="">Blog</a>
            </li>
            <li class="inline-block py-5">
                <a href=""
                   class="text-[--button-primary-text-color] bg-[--button-primary-bg-color] rounded px-4 py-2"
                   style="corner-shape: scoop">Contact</a>
            </li>
        </ul>
    </div>
</nav>

{{ $header ?? '' }}

<main>
    {{ $slot }}
</main>

<footer class="text-sm bg-[--body-background-layered-color] border-t border-gray-800 py-3">
    <div class="flex flex-col gap-3 max-w-[1200px] mx-auto my-0 pt-3 px-3 pb-0">
        <div class="flex grow justify-between gap-5 pb-2.5">
            <div class="max-w-lg">
                <span class="text-base text-[--color-primary]">semmetje.dev</span>
                <p>21-year-old student with a love for programming, games and amusement parks. Creating digital products
                    that truly enchant you, young and old!</p>
            </div>
            <ul>
                <li><span class="text-base text-[--color-primary]">Quick links</span></li>
                <li><a href="">About</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Blog</a></li>
            </ul>
            <ul>
                <li><span class="text-base text-[--color-primary]">Contact</span></li>
                <li><a href="">option 1</a></li>
                <li><a href="">option 2</a></li>
                <li><a href="">option 3</a></li>
            </ul>
        </div>
        <hr class="border-t border-t-gray-800">
        <div class="flex grow items-center justify-between gap-14 text-xs
                    max-sm:flex-col max-sm:gap-4 max-sm:text-center">
            <div class="flex flex-col">
                © Copyright {{ date('Y') }} Sem van den Ende
                <i>~ Made with ❤️ using Laravel ~</i>
            </div>
            <ul class="flex list-none gap-2.5">
                <li><a href="">Privacy Policy</a></li>
                <li aria-hidden="true">•</li>
                <li><a href="">Accessibility Statement</a></li>
            </ul>
            <div class="grow max-sm:!hidden"></div>
            <ul class="flex list-none gap-2.5 text-[25px]">
                <li>
                    <a href="https://github.com/semvde" target="_blank" aria-label="GitHub">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/in/semvandenende" target="_blank" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>

</body>

</html>
