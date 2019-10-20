<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Post;

class PostCommentsController extends Controller
{
    public function update(Comment $comment) {
        
    
            
       
            //$comment->update([
            //'like' => request()->has('like')]); 
            
            $comment->increment('like');
            
             return redirect()->back();
   
}

 public function store(Post $post) {
     
    $attributes = request()->validate([ 
      'description'=> ['required', 'min:4','max:255']
      ]);
        
        $post->addComment($attributes);
        
        return redirect()->back();
    }

}
