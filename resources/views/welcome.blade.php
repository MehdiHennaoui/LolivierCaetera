@extends('layout')

@section('content')
<div>
	<h1 class="ui center aligned header title-news">Actualités</h1>
	<section class="ui three column grid container stackable">
		@foreach ($news as $new)
		<div class="column">
			<article class="ui link card segment fluid">
				<a href="{{route('article', $new->id)}}" class="image link-article">
					<img src="{{ URL::asset('img/cahier.jpg') }}" alt="cahier" class="img-post">
				</a>
				<h3 class="header header-posts">{!! $new->title !!}</h3>
				<h4 class="date header-posts">{!! $new->subtitle !!}</h4>
			</article>
		</div>
		@endforeach
	</section>
</div>
@endsection
