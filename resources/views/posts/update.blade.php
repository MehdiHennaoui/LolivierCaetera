@extends('layouts.app')

@section('content')
	<div class="container">
	@if(Session::has('msg'))
		<h3>{{Session::get('msg')}}</h3>
	@endif 
		<h1 class="text-center">Edité un article</h1>
		<form action="{{route('posts.update', $article->id)}}" method="POST">
			{{ csrf_field() }}
			<label>Titre</label><input type="text" name="title" value="{{ $article->title}}" class="form-control">
			<label>Sous-titres</label><input type="text" name="subtitle" value="{{ $article->subtitle}}" class="form-control">
			<label>Contenu</label><textarea type="text-area" name="body" class="form-control">{{ $article->body }}</textarea>
			<button type="submit"  class="form-control btn btn-success">Edité un article</button>
		</form>
	</div>
@endsection