angular.module("app").directive("song", function(){
	return {
		restrict: 'E',
		templateUrl: '/js/templates/song.html',
		scope : {
			track: "="
		},
		link: function(scope, elem, attrs){
			
			elem.bind('click', function(){
				SC.stream('/tracks/'+ scope.track.id).then(function(player){
					player.play();
				});
				scope.icon ="icon large play";
				var suprIcon = $(".icon.large.play").removeClass("icon large play");
				var icon = elem.find("i").addClass("icon large play");
			});




		}
	}
});