<x-default-layout>
    <x-slot name="header">
        <header
            class="flex justify-center items-center gap-5 bg-gradient-to-bl from-sky-900 via-transparent to-transparent overflow-hidden h-[calc(100dvh-64px)]">
            <div>
                <span>👋 Hello World!</span>
                <h1>I'm Sem van den Ende</h1>
                <p class="text-3xl mb-5">Full-stack Developer</p>
                <p class="text-lg max-w-xl">21-year-old student with a love for programming, games and amusement parks.
                    Creating digital products that truly enchant you, young and old!</p>
                <div class="flex gap-5 items-center mt-5">
                    <a href="#about-me"
                       class="text-[--button-primary-text-color] bg-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[--button-primary-hoverbg-color]"
                       style="corner-shape: scoop">More about me</a>
                    <a href=""
                       class="text-[--button-primary-bg-color] border-2 border-[--button-primary-bg-color] rounded px-4 py-2"
                       style="corner-shape: scoop">Projects</a>
                </div>
            </div>
            <img src="{{ asset('/images/SemCutout.webp') }}" alt=""
                 class="self-end object-contain max-h-[675px] h-full">
        </header>
    </x-slot>

    <section
        class="bg-[--body-background-layered-color] border border-sky-700 shadow-md shadow-sky-900 rounded-lg p-7 mb-14"
        id="about-me">
        <span class="text-sm">🤗 Nice to meet you!</span>
        <h2>About Me</h2>
        <p class="mb-5">I'm Sem, a 21-year-old student with a passion for programming, games, and amusement parks. I
            love building interactive digital experiences that are polished, playful, and immersive, whether it's
            websites, apps, or games.</p>
        <p>I'm currently in the second year of the Creative Media and Game Technologies program at Rotterdam University
            of Applied Sciences, where I design and develop projects using technologies like Laravel, React, JavaScript,
            Tailwind CSS, Express, and C#.</p>
    </section>
</x-default-layout>
