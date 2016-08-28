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
	
	<nav class="ui secondary menu stackable inverted grid">
	
		<div class="computer tablet only row">
			
			<div class="item only">

				<img src="{{ URL::asset('img/logo.jpg') }}" alt="logo" class="logo">

			</div>

			<a href="/" class="item">
				<h1>L'olivier & Caetera</h1>
			</a>

			<div class="right menu">
				
				<a href="/tour" class="item"><h3>Tour</h3></a>
				
				<a href="/articles" class="item"><h3>Blog</h3></a>
			
			</div>
		
		</div>

		<div class="mobile only centered row">

			<a href="/" class="item">
				<h1>L'olivier & Caetera</h1>
			</a>

			<a href="/tour" class="item"><h3>Tour</h3></a>
				
			<a href="/articles" class="item"><h3>Blog</h3></a>
			
		</div>
		
	</nav>
	

	@yield('content')
	

	<footer class="ui container center aligned">
		
		<a href="mailto:lolivier@gmail.com">lolivier@gmail.com</a> -  <a href="https://fr-fr.facebook.com/lolivieretcaetera/"><i class="big icon facebook"></i></a>

	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
	<script src="../Semantic-UI-CSS-master/semantic.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
	<script src="{{ URL::asset('js/app.js')}}"></script>
	<!-- Script angularJS -->
	<script src="{{ URL::asset('js/controllers/mainController.js')}}"></script>
	<script src="{{ URL::asset('js/services/tracksFactory.js')}}"></script>
	<script src="{{ URL::asset('js/directives/song.js')}}"></script>
</body>
</html>