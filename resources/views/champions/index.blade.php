@extends('layouts.public')
​
@section('title', 'My Champions')

@section('content')
	<h2>Champions</h2>
	<hr>
	@foreach($champions as $champion)
		<a href="/champions/{{ $champion->id }}">
			<img src="{{ $champion->image }}" width="50">
		</a>
	@endforeach
@stop