@extends('layout')

@section('content')

     <h1>Create Flyer</h1>
	<div class="row">
		<form action="{{asset('flyer')}}" method="POST" enctype="multipart/form-data" class="col-lg-6">
			@include('flyer.form')

			@if(count($errors))
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			@endif
		</form>
    </div> 
@stop