<x-default-layout title="{{ $project->name }} • Semmetje">
    <x-slot name="header">
        <header
            class="relative flex flex-col justify-center items-center h-80 max-sm:h-60">
            <div class="absolute inset-0 bg-cover bg-center"
                 style="background-image: url('{{ asset($project->list_image) }}');">
            </div>
            <div class="absolute inset-0 bg-black/25"></div>
            <div class="absolute inset-0 bg-gradient-to-bl from-sky-900 via-transparent to-transparent"></div>

            <h1 class="absolute text-white max-sm:text-4xl"
                style="text-shadow: 0 0 20px #0C4A6E">{{ $project->name }}</h1>
            <div class="absolute bottom-5 flex items-center gap-3 mt-3">
                <a href="{{ $project->link_github }}" target="_blank"
                   class="text-[--text-color] bg-slate-800 rounded transition-colors duration-250 px-4 py-2 hover:bg-slate-700"
                   style="corner-shape: scoop"><i class="fa-brands fa-github"></i> GitHub</a>
                <a href="{{ $project->link_live }}" target="_blank"
                   class="text-[--button-primary-text-color] bg-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[--button-primary-hoverbg-color]"
                   style="corner-shape: scoop"><i class="fa-solid fa-globe"></i> Visit Website</a>
            </div>
        </header>
    </x-slot>

    <section class="py-14">
        <h2 class="text-white max-sm:text-3xl">About this Project</h2>
        <p>{{ $project->description }}</p>
        <div class="grid grid-cols-3 gap-y-5 mt-7 max-sm:grid-cols-2">
            @foreach($project->projectImages as $i => $projectImage)
                <img src="{{ asset($projectImage->image) }}" alt="{{ $projectImage->alt_text }}"
                     class="aspect-video object-cover clip-slanted-full">
            @endforeach
        </div>
    </section>

    <section class="pb-14">
        <h2 class="text-white max-sm:text-3xl">Technologies Used</h2>
        @foreach($project->projectTechnologies as $i => $projectTechnology)
            {{ $projectTechnology->name }}
        @endforeach
    </section>
</x-default-layout>
