
@extends('layout.main')
@include('partials.navbar')
@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>{{ $title }}</h1>
                <div class="card mb-3">
                    <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">penulis : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                        <article class="my-3 fs-6">
                            {!! $post->body !!}
                        </article>
                      <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
