@extends('layouts.app')
@section('content')
	<div class='container'>
		<p>Le changement a bien été pris en compte</p>
			<table class="table">
				<tr>
					<td>{{ $user->first_name }}</td>
					<td>{{ $user->last_name }}</td>
					<td>{{ $user->username }}</td>
					<td>{{ $user->email }}</td>
					<td><a href="/home">Accueil admin</a></td>
					<td><a href="{{ route('user.show', $user->id) }}">edité</a></td>
				</tr>
			</table>	
	</div>
@endsection