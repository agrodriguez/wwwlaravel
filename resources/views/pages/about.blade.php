@extends('templates.app')
@section('content')
<div class="title">Laravel 5</div>

<h1>About {{ $first }} {{ $last }}</h1>

<p>
	About
</p>
Databse path: {{ database_path('database.sqlite') }}
<br />
Storage path: {{ storage_path().'\database.sqlite' }}
@stop