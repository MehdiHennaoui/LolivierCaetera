@extends('layout')

@section('content')
<div class="ui container">
	
	<h1 class="ui center aligned header title-news">Actualités</h1>
			<div class="ui three stackable cards">	
			@foreach ($news as $new)
				<article class="ui link card segment fluid">
					<a href="{{route('article', $new->id)}}" class="image link-article">
						<img src="{{ URL::asset('img/cahier.jpg') }}" alt="cahier" class="img-post">
					</a>
					<h3 class="header header-posts">{!! $new->title !!}</h3>
					<h4 class="date header-posts">{!! str_limit($new->subtitle, 30) !!}</h4>
				</article>
			@endforeach
			</div>
</div>
@endsection