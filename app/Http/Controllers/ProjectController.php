<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $projects = Project::where('owner_id', auth()->id())->get();
        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        Project::create(
            request()->validate([
                'title' => ['required', 'min:3'],
                'description' => ['required', 'min:3'],
            ])  + ['owner_id' => auth()->id()]
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
