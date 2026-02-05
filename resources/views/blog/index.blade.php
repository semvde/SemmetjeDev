<x-default-layout title="Blog • Semmetje">
    @push('head')
        <meta name="description"
              content="Portfolio of Sem van den Ende, a full-stack developer. Join me on my learning journey through blog posts.">
    @endpush

    <x-slot name="header">
        <header
            class="flex flex-col justify-center items-center bg-gradient-to-bl from-sky-900 via-transparent to-transparent h-40">
            <span>✈️ My learning journey!</span>
            <h1 class="text-white">Blog Posts</h1>
        </header>
    </x-slot>

    @php
        $posts = [];
    @endphp

    <section class="py-14">
        <div class="grid grid-cols-1 gap-5">
            @forelse($posts as $post)
                <a href="{{ route('blog.show', $post) }}">

                </a>
            @empty
                <p class="text-center">Looks like there aren't any public blog posts currently! Come back soon!</p>
            @endforelse
        </div>
    </section>
</x-default-layout>
