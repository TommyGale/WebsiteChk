@extends('layout')

@section('title')

Forums

@endsection

@section('content')

<h1>Forums</h1>

<p>Got something you would like to discuss? <a href ="/forums/create">Click here </a> to post on the forum</p>

<ul>

@foreach($posts as $post)

<a href ="/forums/{{ $post->id}}">

<li>{{ $post->topic }}</li>
  
  </a>
  
@endforeach

</ul>

   
@endsection