@extends('layouts.app')

@section('content')
@if(Session::has('msg'))
		<h3>{{Session::get('msg')}}</h3>
@endif 
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
				<td><a href="{{route('posts.edit', $article->id)}}">Editer</a></td>
				<form action="{{ route('posts.destroy', $article->id) }}" method="POST">
				{{csrf_field()}}
				<td><button type="submit">supprimer</button></td>
				</form> 
			</tr>
		@endforeach
	</table>
</div>

@endsection

