angular.module("app").controller("MainCtrl", function($scope, tracksFactory){
	 	// Retourne le resultat de la promesse de tracksFactory 
	 	tracksFactory.getTracks().then(function(results){
			
			$scope.tracks = results.data;

		});

		
});


