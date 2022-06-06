

@extends('layout.main')
@include('partials.navbar')
@section('container')
    <h1>{{ $title }}</h1>
    @if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1000x400? {{ $posts[0]->category->name }}" class="card-img-top img-fluid" alt="">
        <div class="card-body text-center">
            <small>
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->id }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                    <p class="card-text">
                        <p><a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> | <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
                    </p>
                    <p class="text-center"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            </small>
          <a href="/posts/{{ $posts[0]->id }}" class="btn btn-primary">Description</a>
        </div>
    </div>
    @else
    <p class="text-center fs-4"> No Book Found </p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post )
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 15rem;">
                    <img src="https://source.unsplash.com/900x900? {{ $post->category->name }} █" class="card-img-top" alt="">
                    <div class="card-body text-center">
                        <small>
                            <h5 class="card-title"><a href="/posts/{{ $post->id }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                <p class="card-text">
                                    <p><a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                                </p>
                                <p class="text-center"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                        </small>
                      <a href="/posts/{{ $post->id }}" class="btn btn-primary">Description</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

