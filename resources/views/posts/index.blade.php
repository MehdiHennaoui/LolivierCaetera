@extends('layouts.app')

@section('content')

<div class="container">
	<table class="table">
		<tr>
				<th>Title</th>
				<th>Subtitle</th>
				<th>Contenu</th>
				<th>Edité</th>
				
		</tr>
		@foreach ($articles as $article)
			<tr>	
				<td>{{ $article->title }}</td>
				<td>{{ $article->subtitle }}</td>
				<td>{{ str_limit($article->body) }}</td>
				<td><a href="{{route('posts.edit', $article->id)}}">Edité</a></td>
				<td></td> 
			</tr>
		@endforeach
	</table>
</div>

@endsection

