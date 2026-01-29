<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function projects()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }
}
