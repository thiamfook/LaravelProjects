<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTaskController extends Controller
{
    public function store(Project $project) {
        $attributes = request()->validate([
            'description' => 'required|min:5'
        ]);
        $project->addTask($attributes);
        
        return back();
    }

    public function update(Task $task) {
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();
        
        // $task->update([
        //     'completed' => request()->has('completed')
        // ]);

        return back();
    }
}
