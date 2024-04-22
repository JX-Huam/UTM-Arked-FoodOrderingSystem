@extends('layouts/main')

@section('container')
<h1>ABOUT PAGE</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="images/{{ $image }}" alt="{{ $name }}" width="500" class="img-thumbnail rounded-circle">
@endsection

