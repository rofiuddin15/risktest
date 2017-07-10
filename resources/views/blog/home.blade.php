@extends('layouts.master')

@section('title', 'Blog')

@section('content')

	<h1>Selamat datang di home blog</h1>
	<hr>

	@foreach($blog as $data)
		<h4><a href="/blog/{{$data->id}}">{{ $data->title }}</a></h4>
	@endforeach

@endsection