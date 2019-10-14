@extends('layout')

@section('title')

Forum post

@endsection

@section('content')

<div class= "box">


<h1 class="title">{{ $posts->topic}}</h1>

<div class="content">{{ $posts->summary}}</div>


<p>

<a href="/forums/{{ $posts->id}}/edit">Edit Post</a>
</p>

</div>
@endsection