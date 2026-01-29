<x-default-layout title="Projects • Semmetje">
    <x-slot name="header">
        <header
            class="flex flex-col justify-center items-center bg-gradient-to-bl from-sky-900 via-transparent to-transparent h-40">
            <span>✨ My best work!</span>
            <h1 class="text-white">Projects</h1>
        </header>
    </x-slot>

    <section class="py-14">
        <div class="grid grid-cols-1 gap-5">
            @forelse($projects as $project)
                <a href="{{ route('projects.show', $project) }}">
                    <article
                        class="flex bg-[--body-background-layered-color] border border-sky-700 shadow-md shadow-sky-900 rounded-lg overflow-hidden transition-all duration-500 hover:scale-[1.025] hover:border-sky-500 hover:shadow-sky-700">
                        <div class="relative aspect-video w-80">
                            <img src="{{ asset($project->list_image) }}" alt="{{ $project->name }}"
                                 class="absolute object-cover clip-slanted-right h-full">
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
                        </div>
                        <div class="flex flex-col p-3">
                            <h2 class="text-3xl text-white">{{ $project->name }}</h2>
                            <p>{{ $project->summary }}</p>
                            <div class="flex flex-wrap gap-1.5 mt-auto -ml-4">
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
                <p class="text-center">Looks like there aren't any public projects currently! Come back soon!</p>
            @endforelse
        </div>
    </section>
</x-default-layout>
