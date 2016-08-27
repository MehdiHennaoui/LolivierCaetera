@extends('layouts.app')

@section('content')

<div class="container">
<div><a href="{{route('posts.create')}}" class="btn btn-primary">Nouvel article</a></div>
	<table class="table">
		<tr>
				<th>Title</th>
				<th>Subtitle</th>
				<th>Contenu</th>
				<th>&nbsp;</th>
		</tr>
		@foreach ($articles as $article)
		<tr>	
			<td>{{ $article->title }}</td>
			<td>{{ $article->subtitle }}</td>
			<td>{{ str_limit($article->body) }}</td>
			<td><a href="{{route('posts.edit', $article->id)}}">Editer</a></td>
		</tr>
		@endforeach
	</table>
</div>

@endsection

