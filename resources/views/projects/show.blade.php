<x-default-layout title="{{ $project->name }} • Semmetje">
    <x-slot name="header">
        <header
            class="relative flex flex-col justify-center items-center h-80 max-sm:h-60">
            <div class="absolute inset-0 bg-cover bg-center"
                 style="background-image: url('{{ asset('storage/' . $project->list_image) }}');">
            </div>
            <div class="absolute inset-0 bg-black/25"></div>
            <div class="absolute inset-0 bg-gradient-to-bl from-sky-900 via-transparent to-transparent"></div>

            <h1 class="absolute text-white max-sm:text-4xl"
                style="text-shadow: 0 0 20px #0C4A6E">{{ $project->name }}</h1>
            <div class="absolute bottom-5 flex items-center gap-3 mt-3">
                @if($project->link_github)
                    <a href="{{ $project->link_github }}" target="_blank"
                       class="text-[--text-color] bg-slate-800 rounded transition-colors duration-250 px-4 py-2 hover:bg-slate-700"
                       style="corner-shape: scoop"><i class="fa-brands fa-github"></i> GitHub</a>
                @endif
                @if($project->link_live)
                    <a href="{{ $project->link_live }}" target="_blank"
                       class="text-[--button-primary-text-color] bg-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[--button-primary-hoverbg-color]"
                       style="corner-shape: scoop"><i class="fa-solid fa-globe"></i> Visit Website</a>
                @endif
            </div>
        </header>
    </x-slot>

    <section class="py-14">
        <h2 class="text-white max-sm:text-3xl">About this Project</h2>
        <p>{{ $project->description }}</p>
        <div class="grid grid-cols-3 gap-y-5 mt-7 max-sm:grid-cols-2">
            @foreach($project->projectImages as $i => $projectImage)
                <div class="flex flex-col gap-2">
                    <img src="{{ asset('storage/' . $projectImage->image) }}" alt="{{ $projectImage->alt_text }}"
                         class="aspect-video object-cover clip-slanted-full">
                    <p class="text-center italic -ml-4 px-2">{{ $projectImage->alt_text }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="pb-14">
        <h2 class="text-white mb-4 max-sm:text-3xl">Technologies Used</h2>
        <div class="flex flex-wrap gap-y-3">
            @foreach($project->projectTechnologies as $i => $projectTechnology)
                <div class="bg-sky-950/75 clip-slanted-full-reduced px-8 py-2">
                    <h3 class="text-lg">{{ $projectTechnology->name }}</h3>
                    <p class="-ml-2">
                        @switch($projectTechnology->type)
                            @case('front')
                                <span class="text-[#4FC3F7]">Front-end</span>
                                @break
                            @case('back')
                                <span class="text-[#81C784]">Back-end</span>
                                @break
                            @case('full')
                                <span class="text-[#BA68C8]">Full-stack</span>
                                @break
                            @case('tool')
                                <span class="text-[#FFB74D]">Development Tool</span>
                                @break
                            @case('data')
                                <span class="text-[#FFD54F]">Database</span>
                                @break
                            @default
                                <span class="text-[#B0BEC5]">Other</span>
                        @endswitch
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="pb-14">
        <h2 class="text-white max-sm:text-3xl">Insights</h2>
        <p>{{ $project->insights }}</p>
    </section>
</x-default-layout>
