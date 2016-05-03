@extends('templates.app')
@section('content')
	<h1>Edit Article</h1>

	<hr/>

	{!! Form::model($article,['action'=>['ArticlesController@update',$article->id],'method'=>'PATCH']) !!}
		
		@include('articles._form',['submitButtonText' => 'Update Article']);


	{!! Form::close() !!}

	@include('errors.list')

@stop
