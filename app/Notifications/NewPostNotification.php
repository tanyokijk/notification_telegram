<?php

namespace App\Notifications;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class NewPostNotification extends Notification
{
    use Queueable;
    protected Post $post;
    /**
     * Create a new notification instance.
     */
    public function __construct($post)
    {
        $this->post =$post;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','telegram'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting("New Post!\n")
                    ->line($this->post->title)
                    ->line($this->post->text)
                    ->action('View', url("/posts/{$this->post->id}"));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to($notifiable->telegram_user_id)
            ->content("New Post!\n")
            ->line($this->post->title)
            ->line($this->post->text)
            ->button('View', url("/posts/{$this->post->id}"));
    }
}
