@extends('layout')

@section('content')
<div class="ui container">
	<h1 class="ui center aligned huge header header-article">{!! $news->title !!}</h1>
	<h3 class="ui center aligned disabled header header-article">{!! $news->subtitle !!}</h3>
	<img  src="{{ URL::asset('img/groupeNoirBlanc.jpg') }}" alt="groupe" class="ui centered image img-article">
	<div class="ui text container article-body">
		{!! Markdown::convertToHtml($news->body) !!}
	</div>
</div>	
</div>
@endsection
