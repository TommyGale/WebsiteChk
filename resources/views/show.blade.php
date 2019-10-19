@extends('layout')

@section('title')

Post

@endsection

@section('content')

<div class ="box">

<h1>{{ $post->topic }}</h1>

<div class="content">{{ $post->summary }}</div>

<p>

<a href="/posts/{{ $post->id}}/edit">Edit Post</a>
</p>

</div>



@if ($post->comments->count())

<div>

@foreach ($post->comments as $comment)

<div class="box">

<form method="POST" action="/comments/{{ $comment->id }}">

{{ method_field('PATCH') }} {{ csrf_field() }}


<ul>


<li>{{ $comment->description }}</li>

</ul>

<button type="submit" class="button" name="like">Likes:{{$comment->like}}</button>


</form>


</div>

@endforeach

</div>

</div>

@endif



@endsection