<x-default-layout>
    <x-slot name="header">
        <header class="flex justify-center items-center gap-5 h-[calc(100dvh-64px)]">
            <div>
                <span>👋 Hello World!</span>
                <h1>I'm Sem van den Ende</h1>
                <p class="text-3xl mb-5">Full-stack Developer</p>
                <p class="text-lg max-w-xl">21-year-old student with a love for programming, games and amusement parks.
                    Creating digital products that truly enchant you, young and old!</p>
            </div>
            <img src="{{ asset('/images/SemCutout.webp') }}" alt="" class="h-full object-contain">
        </header>
    </x-slot>
</x-default-layout>
