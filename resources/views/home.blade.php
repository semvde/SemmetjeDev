<x-default-layout>
    @push('head')
        <meta name="description"
              content="Portfolio of Sem van den Ende, a full-stack developer creating playful and immersive digital experiences with Laravel, React and other modern web technologies.">
    @endpush

    <x-slot name="header">
        <header
            class="flex justify-center items-center gap-5 bg-gradient-to-bl from-sky-900 via-transparent to-transparent overflow-hidden h-[calc(100lvh-64px)] max-sm:flex-col">
            <div class="max-sm:mt-[15dvh]">
                <span>👋 Hello World!</span>
                <h1 class="text-white max-sm:text-4xl">I'm Sem van den Ende</h1>
                <p class="text-3xl mb-5">Full-stack Developer</p>
                <p class="text-lg max-w-xl">21-year-old student with a love for programming, games and amusement parks.
                    Creating digital products that truly enchant you, young and old!</p>
                <div class="flex gap-5 items-center mt-5 max-sm:justify-center">
                    <a href="#about-me"
                       class="text-[--button-primary-text-color] bg-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[--button-primary-hoverbg-color]"
                       style="corner-shape: scoop">More about me</a>
                    <a href="{{ route('projects.index') }}"
                       class="text-[--button-primary-bg-color] border-2 border-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[#00DDDD20]"
                       style="corner-shape: scoop">Projects</a>
                </div>
            </div>
            <img src="{{ asset('/images/SemCutout.webp') }}"
                 alt="Professional portrait of a young man with short blond hair and black glasses, smiling slightly and wearing a dark polo shirt."
                 class="self-end object-contain max-h-[675px] h-full max-sm:object-bottom">
        </header>
    </x-slot>

    <section
        class="bg-[--body-background-layered-color] border border-sky-700 shadow-md shadow-sky-900 rounded-lg p-7 mb-14"
        id="about-me">
        <span class="text-sm">🤗 Nice to meet you!</span>
        <h2 class="text-white">About Me</h2>
        <p class="mb-5">I'm Sem, a 21-year-old student with a passion for programming, games, and amusement parks. I
            love building interactive digital experiences that are polished, playful, and immersive, whether it's
            websites, apps, or games.</p>
        <p class="mb-10">I'm currently in the second year of the Creative Media and Game Technologies program at
            Rotterdam University
            of Applied Sciences, where I design and develop projects using technologies like Laravel, React, JavaScript,
            Tailwind CSS, Express, and C#.</p>
        <h3 class="text-white text-center mb-5">My Development Arsenal</h3>
        <div class="grid grid-cols-3 gap-7 max-sm:grid-cols-1 max-sm:gap-2">
            <div class="mb-5">
                <h4 class="text-white text-center mb-2.5">Front-end</h4>
                <div class="flex flex-wrap justify-center gap-2">
                    <img src="https://skillicons.dev/icons?i=html" alt="HTML">
                    <img src="https://skillicons.dev/icons?i=css" alt="CSS">
                    <img src="https://skillicons.dev/icons?i=js" alt="JavaScript">
                    <img src="https://skillicons.dev/icons?i=tailwind" alt="Tailwind CSS">
                    <img src="https://skillicons.dev/icons?i=react" alt="React">
                    <img src="https://skillicons.dev/icons?i=unity" alt="Unity">
                </div>
            </div>
            <div class="mb-5">
                <h4 class="text-white text-center mb-2.5">Back-end</h4>
                <div class="flex flex-wrap justify-center gap-2">
                    <img src="https://skillicons.dev/icons?i=php" alt="PHP">
                    <img src="https://skillicons.dev/icons?i=laravel" alt="Laravel">
                    <img src="https://skillicons.dev/icons?i=nodejs" alt="NodeJS">
                    <img src="https://skillicons.dev/icons?i=express" alt="Express">
                    <img src="https://skillicons.dev/icons?i=cs" alt="CSharp">
                </div>
            </div>
            <div class="mb-5">
                <h4 class="text-white text-center mb-2.5">Databases</h4>
                <div class="flex flex-wrap justify-center gap-2">
                    <img src="https://skillicons.dev/icons?i=mysql" alt="MySQL">
                    <img src="https://skillicons.dev/icons?i=sqlite" alt="SQLite">
                    <img src="https://skillicons.dev/icons?i=mongodb" alt="MongoDB">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-14">
        <span class="text-sm">💼 Some of my work</span>
        <h2 class="text-white mb-4">Discover my Projects</h2>
        <div class="grid grid-cols-1 gap-5">
            @forelse($projects as $project)
                <a href="{{ route('projects.show', $project) }}">
                    <article
                        class="flex bg-[--body-background-layered-color] border border-sky-700 shadow-md shadow-sky-900 rounded-lg overflow-hidden transition-all duration-500 hover:scale-[1.025] hover:border-sky-500 hover:shadow-sky-700 max-sm:flex-col">
                        <div class="relative aspect-video w-80 max-sm:w-full max-sm:aspect-[16/6]">
                            <img src="{{ asset('storage/' . $project->list_image) }}" alt="{{ $project->name }}"
                                 class="absolute object-cover w-full h-full sm:clip-slanted-right">
                            @if($project->open_source)
                                <div
                                    class="text-xs bg-green-700/85 border border-green-500/50 rounded-full absolute top-2 right-3 px-2 py-1 z-50">
                                    <i class="text-green-300 fa-solid fa-unlock"></i> <span class="text-green-100">Open Source</span>
                                </div>
                            @else
                                <div
                                    class="text-xs bg-orange-700/85 border border-orange-500/50 rounded-full absolute top-2 right-3 px-2 py-1 z-50">
                                    <i class="text-orange-300 fa-solid fa-unlock"></i> <span class="text-orange-100">Closed Source</span>
                                </div>
                            @endif
                            @if($project->in_development)
                                <div
                                    class="text-xs bg-yellow-700/85 border border-yellow-500/50 rounded-full absolute top-2 left-3 px-2 py-1 z-50">
                                    <i class="text-yellow-300 fa-solid fa-code"></i> <span class="text-yellow-100">In Development</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex flex-col p-3 max-sm:min-h-40">
                            <h2 class="text-3xl text-white">{{ $project->name }}</h2>
                            <p>{{ $project->summary }}</p>
                            <div class="flex flex-wrap gap-1.5 mt-auto sm:-ml-4">
                                @foreach($project->projectTechnologies as $projectTechnology)
                                    <div
                                        class="text-center bg-sky-950/75 border border-sky-700 rounded-full px-4 py-1.5">
                                        {{ $projectTechnology->name }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </article>
                </a>
            @empty
                <p>Looks like there aren't any public projects currently! Come back soon!</p>
            @endforelse
            <a href="{{ route('projects.index') }}"
               class="text-[--button-primary-bg-color] border-2 border-[--button-primary-bg-color] rounded transition-colors duration-250 w-fit px-4 py-2 hover:bg-[#00DDDD20]"
               style="corner-shape: scoop">See all Projects</a>
        </div>
    </section>

    @php
        $posts = [];
    @endphp

    <section class="mb-14">
        <span class="text-sm">💭 Thoughts in a database</span>
        <h2 class="text-white mb-4">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 gap-5">
            @forelse($posts as $post)
                <a href="{{ route('blog.show', $post) }}">

                </a>
            @empty
                <p>Looks like there aren't any public blog posts currently! Come back soon!</p>
            @endforelse
            <a href="{{ route('blog.index') }}"
               class="text-[--button-primary-bg-color] border-2 border-[--button-primary-bg-color] rounded transition-colors duration-250 w-fit px-4 py-2 hover:bg-[#00DDDD20]"
               style="corner-shape: scoop">See all Posts</a>
        </div>
    </section>
</x-default-layout>
