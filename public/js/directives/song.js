angular.module("app").directive("song", function(){
	return {
		restrict: 'E',
		templateUrl: '/js/templates/song.html',
		scope : {
			track: "="
		},
		link: function(scope, elem, attrs){
			// quand on clique sur un element de playlist on joue celui ci
			elem.bind('click', function(){
				SC.stream('/tracks/'+ scope.track.id).then(function(player){
					player.play();
				});
			// 	quand on clique sur un element de playlist ajoute à coté de lui une icone play et suprime les icones visible des autres elements de la playlist
				scope.icon ="icon large play";
				var suprIcon = $(".icon.large.play").removeClass("icon large play");
				var icon = elem.find("i").addClass("icon large play");
			});
		}
	}
});