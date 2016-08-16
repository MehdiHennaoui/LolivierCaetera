@extends('layouts.app')

@section('content')

<div class="container">
	<table>
		@foreach ($articles as $article)
				
				<td>{{ $article->title }}</td>
				<td>{{ $article->subtitle }}</td>
				<td>{{ str_limit($article->body) }}</td> 
			
		@endforeach
	</table>
</div>

@endsection

