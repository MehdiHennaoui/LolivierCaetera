@extends('layout')

@section('content')
<div class="ui container">
	
	<h1 class="ui center aligned header title-news">Concerts à venir</h1>
			<table class="ui very basic table">
		<tbody>
		@foreach ($concerts as $concert)
		<tr>
            <td>{{$concert->date->format('d/m')}} {{$concert->hour}}</td>
            <td>{{$concert->city}}</td>
            <td>{{$concert->place}}</td>
            <td>{{$concert->adress}}</td>
		</tr>
		@endforeach
		</tbody>
</div>
@endsection