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
      'topic'=> ['required', 'min:3','max:255'],
      'summary'=> ['required', 'min:3','max:255']
      ]));
          
       return redirect('/posts');
    }

    
    public function show(Post $post)
    {
         //$post = Post::findOrFail($id);
         
        
         
         return view ('show', compact('post'));
    }

   
    public function edit($id)
    {
        
        $post = Post::findOrFail($id);
        
       return view ('edit', compact('post')); 
    }

   
    public function update($id)
    {
        $post = Post::findOrFail($id);
        $post->update(request(['topic','summary']));
        
        return redirect('/posts');
    }

   
    public function destroy($id)
    {
       $post = Post::findOrFail($id);
       $post->delete();
       
       return redirect('/posts');
    }
}
