@extends('layouts.app')

@section('content')
<div>
@if(Session::has('supr'))
		<h3 class="alert alert-warning">{{Session::get('supr')}}</h3>
@endif
</div>  
<div class="container">
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

