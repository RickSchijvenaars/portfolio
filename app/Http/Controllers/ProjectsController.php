<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $title = 'RS | PROJECTS';
        $projects = Project::all()->sortByDesc('created_at');
        return view('projects', compact('title', 'projects'));
    }

    public function details($name){
        $project = Project::where('title',$name)->first();
        $title = "RS | $project->title";
        $images = json_decode($project->images, true);

        return view('projectdetails', compact('project', 'title', 'images'));
    }
}
