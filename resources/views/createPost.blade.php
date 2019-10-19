@extends('layout')

@section('title')

Create new Post

@endsection

@section('content')

<h1>Create a New Post</h1>

<form method ="POST" action="/posts">

{{ csrf_field() }}

<div class="box">

<div class="field">

<label class="label" for="topic">Topic</label>


<div class ="control">

<input type="text"  name="topic" placeholder ="Topic title"  value ="{{ old('topic')}}" class="input {{ $errors->has('topic') ? 'is-danger' : ''}}" required>


</div>
</div>

<div class="field">

<label class="label" for="summary">Summary</label>


<div class ="control">

<textarea name ="summary" placeholder ="Topic summary" value ="{{ old('summary')}}" class="input {{ $errors->has('summary') ? 'is-danger' : ''}}" required></textarea>


</div>
</div>

<div class="field">

<div class ="control">

<button type="submit" class="button is-link">Create Post</button>

</div>
</div>

</div>

@include ('errors')
</form>
@endsection

