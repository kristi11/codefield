<?php

namespace App\Mail;

use App\User;
use App\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProjectPublished extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $project;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Project $project, User $user)
    {
        $this->project = $project;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('NEW: '.$this->project->dsc_title)
                    ->markdown('emails.projectPublished');
    }
}
