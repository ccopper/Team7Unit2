@extends('master')
@section('header')
	<h2>
		List of Pets
	</h2>
@stop
@section('content')
	@foreach($pets as $pet)
	
		{{$pet}}
		{{$pet->Pettype->Name}}
		<br>
	@endforeach
@stop