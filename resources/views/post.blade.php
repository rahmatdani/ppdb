@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            <small class="text-muted">
                by <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                {{ $post->created_at->diffForHumans() }}
            </small>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top my-4" alt="...">
            <h2>{{ $post->title }}</h2>
            <article class="my-2">
                {!! $post->body !!}
            </article>
            <br>
            <a href="/blog" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
</div>
    {{-- <article>
        <h2>{{ $post->title }}</h2>
        <h4>{{ $post->author->name }}</h4>
        <p>By. {{ $post->author->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        {!! $post->body !!}
        <br>
        <a href="/blog">Kembali</a>
    </article> --}}
@endsection
