@extends('layouts.public')
​
@section('title', 'Champion')
​
@section('content')
	<div class="row">
		<div class="col-sm-3">
			<img class="img-circle" src="{{ $champion->image }}"/>
			<h2>{{ $champion->name }}</h2>
		</div>
		<div class="col-sm-9">
			<p sytle="margin-top:20px" class="champ-lore">{!! $champion->lore !!}</p>
		</div>
	</div>
@stop