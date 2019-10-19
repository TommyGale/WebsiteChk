<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
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
   
   public function store()
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
   
   public function update(Post $post)
   {
        //dd('hello!'); Good for debugging
        //dd(request()->all());
        
        $post->update(request(['topic','summary']));
        
        return redirect('/forums');
   }
   
   public function destroy(Post $post)
   {
       $post->delete();
       
       return redirect('/forums');
   }
   
   public function edit(Post $post)
   {
       //return $id;
      
       return view ('edit', compact('post'));
   }
}

