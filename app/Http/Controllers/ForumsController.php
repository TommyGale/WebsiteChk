<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
   
    public function index()
    {
       $posts =  Post::all();
       
     
       
       return view('/forums', compact('posts'));
    }

    
    public function create()
    {
         return view ('createPost');
    }

   
    public function store(Request $request)
    {
       Post::create(request()->validate([ 
      'topic'=> ['required', 'min:3','max:255'],
      'summary'=> ['required', 'min:3','max:255']
      ]));
          
       return redirect('/forums');
    }

    
    public function show(Post $post)
    {
         return view ('show', compact('post'));
    }

   
    public function edit(Post $post)
    {
       return view ('edit', compact('post')); 
    }

   
    public function update(Request $request, Post $post)
    {
        $post->update(request(['topic','summary']));
        
        return redirect('/forums');
    }

   
    public function destroy(Post $post)
    {
       $post->delete();
       
       return redirect('/forums');
    }
}
