'use strict';

angular.module("controllers.indexController", [])
.controller("indexController", ["$scope", "$rootScope", "$location", "$window",
	"$http", "$routeParams",
	function ($scope, $rootScope, $location, $window, $http, $routeParams){
	    console.log("Here in indexController!");

	    $scope.loginUser = function(){
	    	$window.location.href = "#!/";
	    	// console.log($scope.username);
	    }
	}]);