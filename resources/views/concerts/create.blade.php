@extends('layouts.app')

@section('content')
	<div class="container">
	@if(Session::has('edit'))
		<h3 class="alert alert-success">{{Session::get('edit')}}</h3>
	@endif
		<h1 class="text-center">Nouveau concert</h1>
		<form action="{{route('concert.create')}}" method="POST">
			{{ csrf_field() }}
			<label>Date</label>
			<input type="date" name="date"  class="form-control">
			<label>Heure</label>
			<input type="time" name="hour" class="form-control">
			<label>Ville</label>
			<input type="text" name="city" class="form-control">
			<label>Lieu</label>
			<input type="text" name="place" class="form-control">
			
			

			<label>Adresse</label><textarea type="text-area" name="adress" class="form-control" rows="5"></textarea>
			<button type="submit"  class="form-control btn btn-success">Ajouter Concert</button>
		</form>
		
	</div>
@endsection