@extends('layout')

@section('title')

Forum Posts

@endsection

@section('content')

<h1>Posts</h1>

@if(auth()->id() == true )

<p>Got something you would like to discuss? <a href ="/posts/create">Click here </a> to post on the forum</p>

@endif

@if(auth()->id() == false )

<p>Got something you would like to discuss? <a href ="/register">Click here </a> to create an account.Forgot to login? <a href ="/login">Click here </a> to login</p>

@endif



<ul>

@foreach($posts as $post)

<a href ="/posts/{{ $post->id}}">

<li>{{ $post->topic }}</li>
  
  </a>
  
@endforeach

</ul>

   
@endsection