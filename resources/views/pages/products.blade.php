@extends('templates.app')
@section('content')
<div class="title">Laravel 5</div>


<h1>Products page </h1>
<!-- Declaracion de variable -->

{{-- */$i=count($products);/* --}}

<p>
	Products {{ $i }}
</p>

@if ($i)
	<ul>
		@foreach ($products as $product)
		<li>{{ $product }}</li>
		@endforeach
	</ul> 
@else
	<p>Hola</p>
@endif




@stop