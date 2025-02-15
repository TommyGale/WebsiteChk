@extends('layout')

@section('title')

Post

@endsection

@section('content')

<div class ="box">

<h1>{{ $post->topic }}</h1>

<div class="content">{{ $post->summary }}</div>
<div>Posted by: {{ $post->user->name }}</div>
<div>Updated: {{ $post->updated_at->diffForHumans() }}</div>
@can('update', $post)

<p>

<a href="/posts/{{ $post->id}}/edit">Edit Post</a>
</p>

</div>

@endcan

@if (session('message'))

<p><b>{{ session('message') }}</b></p>

@endif

<div class="box">

<form method="POST" action="/posts/{{ $post->id}}/comments">

 {{ csrf_field() }}

<div class="field">

<label class="label" for="description">Comment</label>

</div>

<div class="field">

<input type="text" class="input" name="description" placeholder="Write a comment" required>

</div>

<button type="submit" class="button is-link">Publish comment</button>


@include ('errors')

</form>

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

<button type="submit" class="button" name="like">Like:{{$comment->like}}</button>



</form>

<form method="POST" action="/comments/{{ $comment->id }}">

{{ method_field('PATCH') }} {{ csrf_field() }}


<button type="submit" class="button" name="dislike">Dislike:{{$comment->dislike}}</button>



</form>


</div>

@endforeach

</div>


</div>




@endif



@endsection