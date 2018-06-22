<?php

namespace App\Notifications;

use App\User;
use App\SubmitRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProjectRejected extends Notification implements ShouldQueue
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
                    ->subject('Product Rejected')
                    ->line("Unfortunately we weren't able to approve your product.Please make any necesary changes to your code and try again. If you are submitting a HTML template please make sure that the template is at least responsive.We try to have high quality products on our platform. Also make sure your Github repository link is correct (if submitting a github project). This may be one of the reasons your product could not be approved. If you have any questions or think that your product was wrongfully rejected please don't hesitate to contact us at support@codefield.io . We will be more than happy to guide you and help you get your product approved.")
                    ->action('Go to your dashboard', url('/'))
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
