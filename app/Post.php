<?php

namespace App;

use App\Events\PostCreated;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
      use Notifiable;
      use Likable;
    
      protected $guarded = [];
      
      protected $dispatchesEvents = [
      
      'created' => PostCreated::class ];
      
      //public static function boot() {
 
        //parent::boot();
        
        //static::updating(function($post){
            
            //$post->updated()->attach(Auth::id());
        //});
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
   
   public function tags()
   {
       return $this->belongsToMany(Tag::class)->withTimestamps();
   }
   
}



