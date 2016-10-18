@extends('admin.template.main')

@section('title', 'Registrar usuario')

@section('title2', 'Registrar un usuario')

@section('content')

	
<div class="formContainerConstants">

	{!! Form::open(['route' => 'constant.store', 'method' => 'POST']) !!}
		
		


	{!! Form::close() !!}
</div>
@endsection