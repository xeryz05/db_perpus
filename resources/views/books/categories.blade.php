

@extends('layout.main')
@include('partials.navbar')

@section('container')
    <h1>Books Category</h1>
    @foreach ( $categories as $category )
        <ul>
            <li>
                <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
            </li>
        </ul>

    @endforeach
@endsection

