@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ route('user.password')}}" method="POST" >
		{{csrf_field()}}
		<label>Ancien mot de passe</label>
		<input type="password" name="password[]" class="form-control">
		<label>Nouveau mot de passe</label>
		<input type="password" name="password[]" value="" class="form-control">
		<label>Confirmé Nouveau mot de passe</label class="form-control">
			<input type="password" name="password[]" value="" class="form-control">
			<button type="submit" action="route('user.password')" class="form-control btn btn-primary">Validé</button>
		</form>
	</div>
	@if(Session::has('msg'))
	{{Session::get('msg')}}
	@endif 
	@endsection