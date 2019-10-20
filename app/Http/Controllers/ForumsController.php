<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
   
    public function index()
    {
       $posts =  Post::all();
       
     
       
       return view('/posts', compact('posts'));
    }

    
    public function create()
    {
         return view ('createPost');
    }

   
    public function store()
    {
       Post::create(request()->validate([ 
      'topic'=> ['required', 'min:4','max:50'],
      'summary'=> ['required', 'min:10','max:255']
      ]));
          
       return redirect('/posts');
    }

    
    public function show(Post $post)
    {    
         
         return view ('show', compact('post'));
    }

   
    public function edit(Post $post)
    {
        
       return view ('edit', compact('post')); 
    }

   
    public function update(Post $post)
    {
        
        request()->validate([ 
      'topic'=> ['required', 'min:4','max:50'],
      'summary'=> ['required', 'min:10','max:255']
      ]);
        
        return redirect('/posts');
    }

   
    public function destroy(Post $post)
    {
      
       $post->delete();
       
       return redirect('/posts');
    }
}
