@extends('layouts.app')

@section('content')
	
	<p>Article sauvegardé</p>
	<h3>{{ $article->title }}</h3>
	<h2>{{ $article->subtitle }}</h2>
	<p>{!! Markdown::convertToHtml($article->body); !!}</p>
@endsection