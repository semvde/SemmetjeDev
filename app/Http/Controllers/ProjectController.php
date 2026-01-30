<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::where('public', 1)
            ->latest()
            ->get();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'summary' => 'required|string|max:255',
            'link_github' => 'required|url|max:255',
            'link_live' => 'required|url|max:255',
            'description' => 'required|string',
            'insights' => 'required|string',

            'list_image' => 'required|image',

            'project_images' => 'required|array|min:1',
            'project_images.*.image' => 'required|image',
            'project_images.*.alt_text' => 'string|nullable',

            'project_technologies' => 'required|array|min:1',
            'project_technologies.*.name' => 'required|string|max:100',
            'project_technologies.*.type' => 'required|string|max:100',

            'open_source' => 'boolean',
            'public' => 'boolean'
        ]);

        $validated['list_image'] = $request->file('list_image')->store('images/projects', 'public');

        $slug = Str::slug($request->input('name'));
        $originalSlug = $slug;
        $counter = 1;
        while (Project::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }
        $validated['slug'] = $slug;

        $projectImages = $validated['project_images'];
        unset($validated['project_images']);

        $projectTechnologies = $validated['project_technologies'];
        unset($validated['project_technologies']);

        $project = Project::create($validated);

        foreach ($projectImages as $projectImage) {
            $project->projectImages()->create($projectImage);
        }

        foreach ($projectTechnologies as $projectTechnology) {
            $project->projectTechnologies()->create($projectTechnology);
        }

        return redirect()->route('admin.projects.index')
            ->with('alert', "The project {$validated['name']} has been created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        if (!$project->public && Gate::denies('admin')) abort(404);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('alert', "The project {$project->name} has been deleted!");
    }
}
