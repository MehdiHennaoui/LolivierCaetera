@extends('layout')

@section('content')
<div class="container">
    @foreach ($news as $new)
        <h3>{!! $new->title !!}</h3>
        <h2>{!! $new->subtitle !!}</h2>
        {!! Markdown::convertToHtml($new->body) !!}
	@endforeach
</div>
@endsection
