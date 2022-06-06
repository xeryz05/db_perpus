@extends('layout.main')
@include('partials.navbar')
@section('container')
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <img src="images/{{ $image }}" alt="{{ $name }}" width="100%">
@endsection
