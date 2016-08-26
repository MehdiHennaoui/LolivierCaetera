@extends('layout')

@section('content')
<div class="ui container">
	<h1 class="ui center aligned header header-article">{!! $news->title !!}</h1>
	<h3 class="ui center aligned header header-article">{!! $news->subtitle !!}</h3>
	<img  src="{{ URL::asset('img/groupeNoirBlanc.jpg') }}" alt="groupe" class="ui centered image img-article">
	<div class="article-body row">
		{!! Markdown::convertToHtml($news->body) !!}
	</div>
</div>	
</div>
@endsection
