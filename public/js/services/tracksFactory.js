angular.module("app").factory("tracksFactory", function($http, $q){
	
	// la promesse qui récupere le tabelau de données dans le souncloud de L'olivier retourne une erreur si elle ne trouve rien
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
	// Rend la fonction "publique" 
	return{
		getTracks : getTracks
	}
});
	

