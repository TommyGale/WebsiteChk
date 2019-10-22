<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Post;

class PostCommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['']);
    }
    
    public function update(Comment $comment) {
       
            if(request()->has('like')) {
                
                $comment->increment('like');
            
            }
                
            elseif(request()->has('dislike')) {
                
                $comment->increment('dislike');
            }
                
             return redirect()->back();
   
}

 public function store(Post $post) {
     
    $attributes = $this->commentValid();
        
        $attributes['created_by'] = auth()->id();
     
        $post->addComment($attributes);
        
        return redirect()->back();
    }
    
    protected function commentValid() {
        
        return request()->validate([
         'description' => ['required', 'min:4','max:50']
        ]);
        
    }

}
