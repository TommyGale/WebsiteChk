<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Post;

class PostCommentsController extends Controller
{
    public function update(Comment $comment) {
        
        
        $comment->increment('like');
             
        return redirect()->back();
             
    }
    
   
    

    
    
}
