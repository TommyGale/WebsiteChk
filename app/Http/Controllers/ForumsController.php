<?php

namespace App\Http\Controllers;

use App\Post;
use App\Mail\PostCreated as PostCreatedMail;
use App\Events\PostCreated;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
   
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
        
      $attributes = $this->postValid();
      
      $attributes['user_id'] = auth()->id();
      
      $post = Post::create($attributes);
      
      flash('Your post has been created.');
      
       return redirect('/posts');
    }

    
    public function show(Post $post)
    {
        
         
         return view ('show', compact('post'));
    }

   
    public function edit(Post $post)
    {
        if(\Gate::denies('update', $post))
        {
            return redirect()->back();
        }
        
        
        if($post->user_id !== auth()->id()){
            
          return redirect()->back();
        }
        
       return view ('edit', compact('post')); 
    }

   
    public function update(Post $post)
    {
        
        
        $post->update($this->postValid());
        
        flash('Your post has been updated.');
        
        return redirect('/posts');
    }

   
    public function destroy(Post $post)
    {
        
        
       $post->delete();
       
       flash('Your post has been deleted.');
       
       return redirect('/posts');
    }
    
    protected function postValid () {
    
        
        return request()->validate([
         'topic' => ['required', 'min:4','max:50'],
        'summary' => ['required', 'min:10','max:255']
        
        ]);
   

    }

    
}
