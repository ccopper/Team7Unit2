@extends('master')
@section('header')
	<h2>
		List of Pets
	</h2>
@stop
@section('content')
	<ul>
	@foreach($pets as $pet)
		<li>{{{ $pet->name }}} 
		- {{{ $pet->age }}} 
		- {{{ $pet->pettype->name }}}
		</li>
	@endforeach
	</ul>
	{{{ $count }}} pets found.
	
@stop