@extends('layouts.app')
	@section('content')
		<form action="{{ route('user.password')}}" method="POST">
			{{csrf_field()}}
			<label>Ancien mot de passe</label><input type="password" name="password[]">
			<label>Nouveau mot de passe</label><input type="password" name="password[]" value="">
			<label>Confirmé Nouveau mot de passe</label><input type="password" name="password[]" value="">
			<button type="submit" action="route('user.password')">Validé</button>
		</form>
	@if(Session::has('msg'))
		{{Session::get('msg')}}
	@endif 
@endsection