@extends('layouts.app')
@section('content')
	<div class='container'>
		@if(Session::has('msg'))
		<h3>{{Session::get('msg')}}</h3>
		@endif 
		<table class="table">
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Pseudo</th>
				<th>Email</th>
				<th>Edition</th>
			</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->first_name }}</td>
				<td>{{ $user->last_name }}</td>
				<td>{{ $user->username }}</td>
				<td>{{ $user->email }}</td>
				<td><a href="{{ route('user.edit', $user->id) }}">edité</a></td>
			</tr>
		@endforeach
		</table>
	</div>
@endsection