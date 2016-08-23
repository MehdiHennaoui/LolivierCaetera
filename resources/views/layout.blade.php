<!DOCTYPE html>
<html lang="fr" ng-app="app">
<head>
	<meta charset="UTF-8">
	<title>L'olivier & Caetera</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
</head>
<body>
	<menu>
		<img src="http://fakeimg.pl/100x100/" alt="logo">
		<div><a href="/">L'olivier &amp; Caetera</a></div>
		<div><a href="#">lien</a></div>
		<div><a href="#">lien</a></div>
		<div><a href="#">lien</a></div>
		<div><a href="#">lien</a></div>
	</menu>
		@yield('content')
	<footer>
		footer
	</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<script src="{{ URL::asset('js/app.js')}}"></script>
<script src="{{ URL::asset('js/controllers/mainController.js')}}"></script>
<script src="{{ URL::asset('js/services/tracksFactory.js')}}"></script>
<script src="{{ URL::asset('js/directives/song.js')}}"></script>
</body>
</html>