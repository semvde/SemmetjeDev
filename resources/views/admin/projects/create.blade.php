<x-admin-layout title="New Project - Dashboard • VentureValley">
    @push('head')
        @vite(['resources/js/admin-publishing.js', 'resources/js/admin-projectimages.js', 'resources/js/admin-projecttechnologies.js'])
    @endpush

    <div class="flex justify-between items-center pb-3.5">
        <h1 class="text-5xl text-[--color-primary] max-sm:text-4xl">New Project</h1>
    </div>
    <div class="flex gap-5">
        <section class="w-3/4">
            <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data"
                  class="flex flex-col gap-3 bg-white rounded-lg p-3"
                  style="box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.25); corner-shape: squircle" id="form">
                @csrf

                <h2 class="text-xl mb-0">Basic Information</h2>
                <div class="flex gap-3">
                    <div class="flex flex-col flex-1">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="off"
                               class="input">
                        @error('name')
                        <span class="text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col flex-1">
                        <label for="summary">Summary</label>
                        <input type="text" name="summary" id="summary" value="{{ old('summary') }}" required
                               class="input">
                        @error('summary')
                        <span class="text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="flex flex-col flex-1">
                        <label for="link_github">Link GitHub</label>
                        <input type="url" name="link_github" id="link_github" value="{{ old('link_github') }}" required
                               class="input">
                        @error('link_github')
                        <span class="text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col flex-1">
                        <label for="link_live">Link Live</label>
                        <input type="url" name="link_live" id="link_live" value="{{ old('link_live') }}" required
                               class="input">
                        @error('link_live')
                        <span class="text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col flex-1">
                    <label for="description">Description</label>
                    <textarea rows="3" name="description" id="description" required
                              class="input">{{ old('description') }}</textarea>
                    @error('description')
                    <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col flex-1">
                    <label for="insights">Insights</label>
                    <textarea rows="3" name="insights" id="insights" required
                              class="input">{{ old('insights') }}</textarea>
                    @error('insights')
                    <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-3">
                    <div class="flex flex-col flex-1">
                        <label for="list_image">List Image</label>
                        <input type="file" accept="image/*" name="list_image" id="list_image" required
                               class="input p-3">
                        @error('list_image')
                        <span class="text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <hr class="mt-3">

                <div>
                    <h2 class="text-xl mb-0">Project Images</h2>
                    <p class="text-gray-400 text-sm italic">A project needs a minimum of one image! You can add more if
                        needed!</p>
                </div>
                <div class="flex flex-col gap-3" id="project-images">
                    <div class="flex gap-3 relative bg-gray-100 border rounded p-3 project-image-row"
                         style="corner-shape: squircle">
                        <div class="flex flex-col flex-1">
                            <label for="project_images.0.image">Image</label>
                            <input type="file" accept="image/*" name="project_images[0][image]"
                                   id="project_images.0.image" required
                                   class="input bg-white p-1.5">
                            @error('project_images.0.image')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col flex-1">
                            <label for="project_images.0.alt_text">ALT Text</label>
                            <input type="text" name="project_images[0][alt_text]" id="project_images.0.alt_text"
                                   value="{{ old('project_images.0.alt_text') }}"
                                   class="input">
                            @error('project_images.0.alt_text')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="button" id="project-images-add"
                        class="text-[--button-primary-text-color] bg-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[--button-primary-hoverbg-color]"
                        style="corner-shape: scoop"><i class="fa-solid fa-plus"></i> Add another image
                </button>

                <hr class="mt-3">

                <div>
                    <h2 class="text-xl mb-0">Project Technologies</h2>
                    <p class="text-gray-400 text-sm italic">A project needs a minimum of one technology! You can add
                        more if needed!</p>
                </div>
                <div class="flex flex-col gap-3" id="project-technologies">
                    <div class="flex gap-3 relative bg-gray-100 border rounded p-3 project-technology-row"
                         style="corner-shape: squircle">
                        <div class="flex flex-col flex-1">
                            <label for="project_technologies.0.name">Name</label>
                            <input type="text" name="project_technologies[0][name]" id="project_technologies.0.name"
                                   value="{{ old('project_technologies.0.name') }}" required
                                   class="input">
                            @error('project_technologies.0.name')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col flex-1">
                            <label for="project_technologies.0.type">Type ('front', 'back', 'full', 'tool', 'data',
                                'other')</label>
                            <input type="text" name="project_technologies[0][type]" id="project_technologies.0.type"
                                   value="{{ old('project_technologies.0.type') }}" required
                                   class="input">
                            @error('project_technologies.0.type')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="button" id="project-technologies-add"
                        class="text-[--button-primary-text-color] bg-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[--button-primary-hoverbg-color]"
                        style="corner-shape: scoop"><i class="fa-solid fa-plus"></i> Add another technology
                </button>

                <input type="hidden" name="open_source" id="open_source" value="{{ old('open_source', '1') }}">
                <input type="hidden" name="public" id="public" value="{{ old('public', '1') }}">
            </form>
        </section>
        <aside class="bg-white rounded-lg w-1/4 h-fit p-3"
               style="box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.25); corner-shape: squircle">
            <h2 class="text-xl">Publishing</h2>
            <ul>
                <li>
                    <div class="flex flex-row gap-4">
                        <label for="setter-open_source">Open Source</label>
                        <input type="checkbox" name="setter-open_source" id="setter-open_source"
                               class="input" @checked(old('open_source', '1') === "1")>
                    </div>
                    <div class="flex flex-row gap-4">
                        <label for="setter-public">Visible</label>
                        <input type="checkbox" name="setter-public" id="setter-public"
                               class="input" @checked(old('public', '1') === "1")>
                    </div>
                </li>
            </ul>
            <button type="submit" form="form"
                    class="text-[--button-primary-text-color] float-right bg-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[--button-primary-hoverbg-color]"
                    style="corner-shape: scoop">Save
            </button>
        </aside>
    </div>
</x-admin-layout>
