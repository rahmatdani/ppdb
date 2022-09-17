
@extends('layout.main')

@section('container')

<div class="container">
    <div class="row">
        @foreach ($category as $ct)
            <div class="col-md-4">
                <a href="/categories/{{ $ct->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/400x250?{{ $ct->name }}" class="card-img-top" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $ct->name }}</h5>
                        </div>
                        {{-- <div class="position-absolute p-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)"> <a href="/categories/{{ $ct->slug }}" class="text-decoration-none text-white">{{ $ct->name }}</a></div> --}}
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>



@endsection
