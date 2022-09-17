@extends('layout.main')

@section('container')
    <h1>{{ $title }}</h1>




    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <small class="text-muted">
                    by <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                        href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-sm btn-primary">Read More ..</a>
            </div>
        </div>


    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $bl)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute p-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)"> <a href="/categories/{{ $bl->category->slug }}" class="text-decoration-none text-white">{{ $bl->category->name }}</a></div>
                        <img src="https://source.unsplash.com/400x250?{{ $bl->category->name }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bl->title }}</h5>
                            <small class="text-muted">
                                by <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </small>
                            <p class="card-text">{{ $bl->excerpt }}</p>
                            <a href="/posts/{{ $bl->slug }}" class="btn btn-sm btn-primary">Read More ..</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    <p class="text-center fs-4">postingan tidak ada</p>
@endif
@endsection
