angular.module("app").controller("MainCtrl", function($scope, tracksFactory){
	 	tracksFactory.getTracks().then(function(results){
			
			$scope.tracks = results.data;

		});

		
});


