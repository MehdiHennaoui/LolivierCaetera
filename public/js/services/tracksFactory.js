angular.module("app").factory("tracksFactory", function($http, $q){
	function getTracks(){
		var deferred = $q.defer();
		return $http({
			method: "GET",
			url: "http://api.soundcloud.com/users/lolivieretcetera/tracks?client_id=bda4ada8694db06efcac9cf97b872b3e",
		}).catch(function(error){
			console.log("err: ", error);
			deferred.reject("error", error);
		});
		
	}
	
	return{
		getTracks : getTracks
	}
});
	

