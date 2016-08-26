@extends('layout')

@section('content')
<div ng-controller="MainCtrl">
	
	<section class="ui grid container stackable">
		<aside class="six wide column">
				<h1 class="ui center aligned header">Playlist</h1>
			<div>
				<div ng-repeat="song in tracks" class="song">
					<song track="song">
				</div>
			</div>
		</aside>
		<div class="ten wide column">
		<article>
			
			<img src="{{ URL::asset('img/groupe.jpg')}}" alt="groupe" class="img-band">

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam error numquam, nulla expedita, doloribus optio temporibus ut deserunt excepturi nostrum? Distinctio accusantium, neque soluta tempore voluptates doloribus suscipit excepturi! Deserunt.</p>

		</article>
			<h1 class="ui center aligned header title-news">Actualités</h1>
		<div class="ui two stackable cards">	
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
	</section>
</div>
<script src="https://connect.soundcloud.com/sdk/sdk-3.1.2.js"></script>
<script>
  SC.initialize({
    client_id: 'bda4ada8694db06efcac9cf97b872b3e',
    redirect_uri: 'http://example.com/callback'
  });
</script>
@endsection
