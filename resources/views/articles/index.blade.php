@extends('templates.app')
@section('content')
	
	<h1>Articles <a class="glyphicon glyphicon-plus-sign" href="{{ action('ArticlesController@create') }}" title="New Article" alt="New Article"></a></h1>

	<div class="panel-group">

	@foreach ($articles as $article)

		<div class="panel panel-default">
			<div class="panel-body">
				<article>
					<h2>
						<a href="{{ action('ArticlesController@show', $article->id) }}">{{ $article->title }}</a> 
					</h2>
					<div class="body">{{ $article->body }}</div>
					<small>{{ $article->published_at->diffForHumans() }}</small>
					<a href="{{ action('ArticlesController@edit', $article->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
					<!--a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-pencil"></span> Pencil 
        </a-->

				</article>
			</div>
		</div>

	@endforeach	
	</div>
@stop
@section('footer')
	<div class="panel-footer">
	<a class="glyphicon glyphicon-plus-sign" href="{{ action('ArticlesController@create') }}"></a>
	</div>
@stop