@extends('layout')

@section('title')

Contact

@endsection

@section('content')

<h1>Contact information</h1>


<br>
<p><b>{{ $help }}<b></p>
<br>

<ul>

@foreach($contacts as $contact)

<li>{{ $contact }}</li>

@endforeach

</ul>

@endsection
