<?php

namespace App\Listeners;


use App\Mail\PostCreated as PostCreatedMail;
use App\Events\PostCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCreatedNotification
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
     * @param  EventPostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
       Mail::to($event->post->user->email)->send(
              new PostCreatedMail($event->post)
      );
    }
}
