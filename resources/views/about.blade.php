@extends('layout.main')

@section('container')
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="assets/images/{{ $image }}" alt="" srcset="">

@endsection
