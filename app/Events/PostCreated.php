<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class PostCreated
{
    use Dispatchable,SerializesModels;

    
    public $post;
    
    
    public function __construct($post)
    {

    $this->post = $post;
    
    }
   }
