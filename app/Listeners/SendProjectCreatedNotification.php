<?php
// created with 'php artisan make:listener SendProjectCreatedNotification --event=ProjectCreated'
namespace App\Listeners;

use App\Events\ProjectCreated;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectCreated as ProjectCreatedMail;

class SendProjectCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProjectCreated  $event
     * @return void
     */
    public function handle(ProjectCreated $event)
    {
        // Option 3 to notify user when a project is created
        Mail::to($event->project->owner->email)->queue(
             new ProjectCreatedMail($event->project)
        );
    }
}
