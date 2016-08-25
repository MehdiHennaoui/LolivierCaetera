<!DOCTYPE html>
<html lang="fr" ng-app="app">
<head>
	<meta charset="UTF-8">
	<title>L'olivier & Caetera</title>
	<!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Semantic-UI-CSS-master/semantic.min.css">

	<!-- Styles -->
     <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
     

</head>
<body>
	<nav class="ui stackable massive inverted  menu">
		<div class="item">
			<a href="/">
				<img src="{{ URL::asset('img/logo.jpg') }}" alt="logo" class="logo">
			</a>
		</div>
			<a href="#" class="item link-nav">Tour</a>
			<a href="#" class="item link-nav">Blog</a>
	</nav>
		@yield('content')
	<footer>
		footer
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
<script src="../Semantic-UI-CSS-master/semantic.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<script src="{{ URL::asset('js/app.js')}}"></script>
<script src="{{ URL::asset('js/controllers/mainController.js')}}"></script>
<script src="{{ URL::asset('js/services/tracksFactory.js')}}"></script>
<script src="{{ URL::asset('js/directives/song.js')}}"></script>
</body>
</html>