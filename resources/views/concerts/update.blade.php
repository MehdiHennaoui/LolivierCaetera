@extends('layouts.app')

@section('content')
	<div class="container">
	@if(Session::has('edit'))
		<h3 class="alert alert-success">{{Session::get('edit')}}</h3>
	@endif
		<h1 class="text-center">Editer un concert</h1>
		<form action="{{route('concert.update', $concert->id)}}" method="POST">
			{{ csrf_field() }}
			<label>Date</label>
			<input type="date" name="date" value="{{ $concert->date}}" class="form-control">
			<label>Heure</label>
			<input type="time" name="hour" value="{{ $concert->hour}}" class="form-control">
			<label>Ville</label>
			<input type="text" name="city" value="{{ $concert->city}}" class="form-control">
			<label>Lieu</label>
			<input type="text" name="place" value="{{ $concert->place}}" class="form-control">
			
			

			<label>Adresse</label><textarea type="text-area" name="adress" class="form-control" rows="5">{{ $concert->adress }}</textarea>
			<button type="submit"  class="form-control btn btn-success">Editer Concert</button>
		</form>
		<hr>
		<div class="alert">
			<form action="{{ route('concert.destroy', $concert->id) }}" method="POST">
				{{csrf_field()}}
				<p>Attention : cette action est définitive</p>
			<button type="submit" class="form-control btn btn-danger">Suprimer</button>	
			</form> 
		</div>
	</div>
@endsection