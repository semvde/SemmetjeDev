<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $projects = Project::where('public', true)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('home', compact('projects'));
    }
}
