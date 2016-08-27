@extends('layouts.app')
@section('content')
<div class='container'>
	@if(Session::has('msg'))
	<div class="alert">
	<h3>{{Session::get('msg')}}</h3>
	</div>
	@endif
	<div>
		<a href="{{ route('concert.create')}}" class="btn btn-primary">Nouveau concert</a>
	</div> 
	<table class="table">
		<tr>
			<th>id</th>
			<th>date</th>
			<th>heure</th>
			<th>adresse</th>
			<th>ville</th>
			<th>lieu</th>
			<th>&nbsp;</th>
		</tr>
		@foreach ($concerts as $concert)
		<tr>
			<td>{{$concert->id}}</td>
            <td>{{$concert->date}}</td>
            <td>{{$concert->hour}}</td>
            <td>{{$concert->adress}}</td>
            <td>{{$concert->city}}</td>
            <td>{{$concert->place}}</td>
			<td><a href="{{ route('concert.edit', $concert->id) }}">Editer</a></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection