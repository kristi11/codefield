<?php

namespace App\Notifications;

use App\User;
use App\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProjectPublished extends Notification implements ShouldQueue
{
    use Queueable;
    protected $project;
    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Project $project)
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
                    ->greeting('Hello there')
                    ->subject('NEW: '.$this->project->title)
                    ->line('As requested we are letting you know that a new product was published at '.config('app.name'))
                    ->action('Check it out', url('products/'.$this->project->title))
                    ->line('If you do not wish to recieve email notifications anymore you can click the notification icon on the top right corner on your account.That would be the blue-ish icon. When clicking it it will turn gray meaning that you have disabled your email notifications.');
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
