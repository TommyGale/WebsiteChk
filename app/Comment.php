<?php

namespace App;

use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    
    use Notifiable;
    
    
    public function post(){
        
        return $this->belongsTo(Post::class);
    }
    
    
}
