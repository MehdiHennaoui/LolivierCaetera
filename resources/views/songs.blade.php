@extends('layout')

@section('content')
<div ng-controller="MainCtrl">
	<div ng-repeat="song in tracks">
		<song track="song">
	</div>
</div>
<script src="https://connect.soundcloud.com/sdk/sdk-3.1.2.js"></script>
<script>
  SC.initialize({
    client_id: 'bda4ada8694db06efcac9cf97b872b3e',
    redirect_uri: 'http://example.com/callback'
  });
</script>
@endsection