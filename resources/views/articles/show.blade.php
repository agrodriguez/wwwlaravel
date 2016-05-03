@extends('templates.app')
@section('content')

	{{ $article->published_at->diffForHumans() }} <a href="{{ action('ArticlesController@edit', $article->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
	<h1>{{ $article->title }}</h1>
		<article>
			<div class="body">{{ $article->body }}</div>
			
		</article>
		<p> by {{ $article->user{'username'} }}</p>
@stop
