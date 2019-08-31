<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        Project::create(
            request()->validate([
                'title' => ['required', 'min:3'],
                'description' => ['required', 'min:3'],
            ])
        );

        // Project::create(request(['title', 'description']));

        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        $project->update(
            request()->validate([
                'title' => ['required', 'min:3'],
                'description' => ['required', 'min:3'],
            ])
        );

        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');
    }

    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }

    public function destroy(Project $project) {
        $project->destroy($id);
        return redirect('/projects');
    }
}
