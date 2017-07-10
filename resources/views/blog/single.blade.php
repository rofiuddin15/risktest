@extends('layouts.master')

@section('title', 'Blog')

@section('content')

	<h1>Hasil Blog</h1>

	{{-- ini di remax

	<h2>{{ $data }}</h2>

	$unescaped

	<ul>

	 cara mengambil data dari table 

	@foreach($users as $data)
		<li>{{ $data->username . ' | ' . $data->fullname }}</li>
	@endforeach
	</ul>

	--}}

	
	<h4>{{ $blog->title }}</h4>
	{!! $blog->description !!}
	

@endsection