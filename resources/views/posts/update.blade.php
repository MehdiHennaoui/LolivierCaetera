@extends('layouts.app')

@section('content')
	<div class="container">
	@if(Session::has('edit'))
		<h3 class="alert alert-success">{{Session::get('edit')}}</h3>
	@endif
		<h1 class="text-center">Edité un article</h1>
		<form action="{{route('posts.update', $article->id)}}" method="POST">
			{{ csrf_field() }}
			<label>Titre</label><input type="text" name="title" value="{{ $article->title}}" class="form-control">
			<label>Sous-titres</label><input type="text" name="subtitle" value="{{ $article->subtitle}}" class="form-control">
			<label>Contenu</label><textarea type="text-area" name="body" class="form-control" rows="20">{{ $article->body }}</textarea>
			<button type="submit"  class="form-control btn btn-success">Edité un article</button>
		</form>
		<hr>
		<div class="alert">
			<form action="{{ route('posts.destroy', $article->id) }}" method="POST">
				{{csrf_field()}}
			<button type="submit" class="form-control btn btn-danger">Suprimer (attention cette action est définitive)</button>	
			</form> 
		</div>
	</div>
@endsection