<?php

namespace App;

use App\Events\PostCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
      use Notifiable;
    
      protected $guarded = [];
      
      protected $dispatchesEvents = [
      
      'created' => PostCreated::class ];
      
      //protected static function boot(){
          
         // parent::boot();
          //static::created(function ($post) {
              
             // Mail::to($post->user->email)->send(
              //new PostCreated($post)
     // );
              
         // });
          
      //}
      
      public function user()
      {
         return $this->belongsTo(User::class);
      }
      
      public function comments(){
       
       return $this->hasMany(Comment::class);
   }
   
   public function addComment($comment){
       
       $this->comments()->create($comment);
       
   }
   
   
}



