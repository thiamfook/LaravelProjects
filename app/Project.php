<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Mail\ProjectCreated; -- if using option 2
use Illuminate\Support\Facades\Mail;
use App\Events\ProjectCreated;

class Project extends Model
{
    protected $guarded = [];    //All form request variables are accepted if guarded is empty

    // Option 4 - This function is triggered when a project is created
    protected $dispatchesEvents = [
        'created' => ProjectCreated::class
    ];

    protected static function boot() {
        parent::boot(); // execute what the parent class does in boot function

        // Model hook - automatically executed after a project record is created (Option 2)
        // static::created(function ($project) {
        //     Mail::to($project->owner->email)->queue(
        //         new ProjectCreated($project)
        //     );    
        // });
    }
    public function owner() {
        return $this->belongsTo(User::class);
    }
    
    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function addTask($task) {
        $this->tasks()->create($task);
    }
}
