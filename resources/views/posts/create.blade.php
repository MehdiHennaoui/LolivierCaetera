@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="text-center">Crée un article</h1>
		<form action="{{route('posts.store')}}" method="POST">
		{{ csrf_field() }}
		<label>Titre</label><input type="text" name="title" class="form-control">
		<label>Sous-titres</label><input type="text" name="subtitle" class="form-control">
		<label>Contenu</label><textarea type="text-area" name="body" class="form-control"></textarea>
		<button type="submit"  class="form-control btn btn-success">Crée nouveau article</button>
				
		</form>
	</div>
@endsection