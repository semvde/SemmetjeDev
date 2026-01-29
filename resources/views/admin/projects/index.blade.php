<x-admin-layout>
    <section>
        <div class="flex justify-between items-center pb-3.5">
            <h1 class="text-5xl text-[--color-primary] max-sm:text-4xl">Projects</h1>
            <a href="{{ route('admin.projects.create') }}"
               class="text-[--button-primary-text-color] bg-[--button-primary-bg-color] rounded transition-colors duration-250 px-4 py-2 hover:bg-[--button-primary-hoverbg-color]"
               style="corner-shape: scoop">New Project</a>
        </div>
        <table class="bg-white rounded-lg min-w-full"
               style="box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.25); corner-shape: squircle">
            <thead class="text-left font-semibold border-b-2">
            <tr>
                <th class="p-3">Name</th>
                <th class="p-3">Summary</th>
                <th class="max-sm:hidden p-3">Created</th>
                <th class="max-sm:hidden p-3">Updated</th>
                <th class="max-sm:hidden p-3">Visibility</th>
                <th class="p-3"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr class="border-b">
                    <td class="p-3">{{ $project->name }}</td>
                    <td class="p-3">{{ $project->summary }}</td>
                    <td class="max-sm:hidden p-3">{{ $project->created_at?->format('d-m-Y') ?? 'Unknown' }}</td>
                    <td class="max-sm:hidden p-3">{{ $project->updated_at?->format('d-m-Y') ?? 'Unknown' }}</td>
                    <td class="max-sm:hidden p-3">
                        @if($project->public)
                            <span class="text-green-600">Visible</span>
                        @else
                            <span class="text-red-700">Hidden</span>
                        @endif
                    </td>
                    <td class="flex justify-end gap-5 text-right p-3">
                        <a href="{{ route('projects.show', $project) }}" aria-label="View"><i
                                class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.projects.edit', $project) }}" aria-label="Edit"><i
                                class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="post"
                              onsubmit="return confirm(`Are you sure you want to delete {{ $project->name }}?\nThis can't be undone!`)"
                              class="max-sm:hidden">
                            @csrf
                            @method('DELETE')
                            <button type="submit" aria-label="Delete">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</x-admin-layout>
