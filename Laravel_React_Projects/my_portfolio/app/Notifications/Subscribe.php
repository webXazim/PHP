<?php

namespace App\Notifications;

use App\Http\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Subscribe extends Notification
{
    use Queueable;
    private $subscribe;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($subscribe)
    {
        $this->subscribe = $subscribe;
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
        ->subject($this->subscribe['subject'])
            ->line($this->subscribe['excerpt'])
            ->action($this->subscribe['btn'], $this->subscribe['url'])
            ->greeting($this->subscribe['subject']);
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
