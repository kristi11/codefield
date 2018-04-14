<?php

namespace App\Notifications;

use App\User;
use App\SubmitRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProjectApproved extends Notification implements ShouldQueue
{
    use Queueable;
    protected $project;
    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(SubmitRequest $project)
    {
        $this->project = $project;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->subject('Project Approved')
                    ->line('We are letting you know that we have approved your project and it will be added on '.config('app.name').' shortly.')
                    ->action('Go to your dashboard', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
