@extends('layout')

@section('title')

Forum Post

@endsection

@section('content')

<div class= "box">


<h1 class="title">{{ $post->topic }}</h1>

<div class="content">{{ $post->summary }}</div>


<p>

<a href="/posts/{{ $post->id}}/edit">Edit Post</a>
</p>

</div>
@endsection