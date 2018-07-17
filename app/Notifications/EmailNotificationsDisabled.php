<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailNotificationsDisabled extends Notification implements ShouldQueue
{
    use Queueable;
    protected $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
                    ->subject('Email notifications disabled')
                    ->error()
                    ->greeting('Hey there '.$this->user->name)
                    ->line('We noticed that you have disabled e-mail notifications.From now on you will not recieve emails on the latest products that are added on out platform.We strongly recommend that you enable these notifications to stay informed on the latest goodies that we have to offer.If you want to do so you can click the button below and then click on account settings')
                    ->action('Manage email notifications',url('/'.$this->user->slug.'/products'))
                    ->line('You are receiving this e-mail because you chose to disable e-mail notifications');
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
