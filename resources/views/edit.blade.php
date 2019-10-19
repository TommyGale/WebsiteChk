@extends('layout')

@section('title')

Edit Post

@endsection


@section('content')

<h1 class ="title">Edit Post</h1>


<div class="box">

<form method="POST" action="/posts/{{ $post->id}}">

{{ method_field('PATCH') }} 

{{ csrf_field() }}

<div class="field">

<label class="label" for="topic">Title</label>


<div class ="control">

<input type="text" class="input" name="topic" placeholder="Topic" value="{{ $post->topic}}">

</div>
</div>

<div class="field">

<label class="label" for="summary">Summary</label>


<div class ="control">

<textarea name="summary" class="textarea" >{{ $post->summary}}</textarea>

</div>
</div>

<div class="field">

<div class ="control">

<button type="submit" class="button is-link">Update Post</button>

</div>
</div>

@include ('errors')

</form>

<form method="POST" action="/posts/{{ $post->id}}">

{{ method_field('DELETE') }} 

{{ csrf_field() }}



<div class="field">

<div class ="control">

<button type="submit" class="button">Delete Post</button>

</div>
</div>

</div>
@include ('errors')
</form>
@endsection