<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;
    
    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($post)
    {
       $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.post-created');
    }
}
