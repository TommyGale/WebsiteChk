@extends('layout')

@section('title')

Forum Posts

@endsection

@section('content')

<h1>Posts</h1>

<p>Got something you would like to discuss? <a href ="/posts/create">Click here </a> to post on the forum</p>

<ul>

@foreach($posts as $post)

<a href ="/posts/{{ $post->id}}">

<li>{{ $post->topic }}</li>
  
  </a>
  
@endforeach

</ul>

   
@endsection