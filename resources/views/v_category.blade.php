
@extends('layout.main')

@section('container')
<h1>Post Category : {{ $category }}</h1>
@foreach ($posts as $bl)
    <article class="mb-5 mt-5">
        <h2>
            <a href="/posts/{{ $bl->slug }}">{{ $bl->title }}</a>
        </h2>
        <h5>by : {{ $bl->author }}</h5>
        <p>{{ $bl->excerpt }}</p>
    </article>
@endforeach
@endsection
