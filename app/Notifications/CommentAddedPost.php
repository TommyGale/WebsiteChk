<?php

namespace App\Notifications;

use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CommentAddedPost extends Notification
{
    use Queueable;
    
    public $post;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail' , 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        
        $url = url('/posts/' . $this->post);
        
        return (new MailMessage)
                    ->subject('Someone commented on one of your posts!')
                    ->line('Take a look at your post to see what people have commented.')
                    ->action('Click here to view the comments made to your post', $url)
                    ->line('Thank you for using our services');
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
