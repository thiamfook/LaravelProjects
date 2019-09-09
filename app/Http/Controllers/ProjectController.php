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
        return view('projects.index', [
            // defined by User hasMany relationship
            'projects' => auth()->user()->projects
        ]);

        // $projects = Project::where('owner_id', auth()->id())->get();
        // return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $attributes = $this->validateProject();
        $attributes['owner_id'] = auth()->id();
        $project = Project::create($attributes);

        // Project::create(request(['title', 'description']));

        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        // Send an email to inform user the project is created
        // Option 1: Directly send email from here
        // Mail::to($project->owner->email)->queue(
        //     new ProjectCreated($project)
        // );

        // Option 2: Use Eloquent event hook, in \App\Project model, boot function

        // Option 3: Fire a custom event \App\Events\ProjectCreated, 
        //    then handle in \App\Listener\SendProjectCreatedNotification
        // event(new ProjectCreated($project));

        // Option 4: Use Eloquent dispatchesEvents, in \App\Project model,

        return redirect('/projects');
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        $project->update($this->validateProject());

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

    protected function validateProject() {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);
    }
}
