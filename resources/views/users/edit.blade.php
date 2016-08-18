@extends('layouts.app')
@section('content')
	<div class='container'>
		
			
			{!! Form::open([ 'route' => 'user.post', $user->id]) !!}
			{{ csrf_field() }}
				<div>
					<label>Nom</label>
					<input type="text" name="first_name"  value="{{ $user->first_name }}" class="form-group" >
				</div>
					<label>Prenom</label>
					<input type="text" name="last_name"  value="{{ $user->last_name }}" class="form-group">
				<div>	
					<label>Nom d'utilisateur</label>
					<input type="text" name="username"  value="{{ $user->username }}" class="form-group">
				</div>
				<div>
					<label>Mail</label>
					<input type="email" name="email"  value="{{ $user->email }}" class="form-group">
				</div>	
				<button type="submit" action="route('user.post')">changé</button>

			{!! Form::close() !!}
			<div>
					<a href="{{ route('user.password') }}">Changement de mot de passe</a>
			</div>	
			
	</div>
@endsection