@extends('layout')

@section('title')

About

@endsection

@section('content')

<h1>About</h1>

<p>Below is a criteria of skills I will be demonstrating throughout this website</p>

<br>


<h2>Checkpoint 1:</h2>

@foreach($check1 as $chk1)
<li>{{ $chk1 }}</li>

@endforeach

<br>

<h2>Checkpoint 2:</h2>

@foreach($check2 as $chk2)
<li>{{ $chk2 }}</li>

@endforeach


@endsection