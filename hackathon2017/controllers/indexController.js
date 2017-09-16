'use strict';

angular.module("controllers.indexController", [])
.controller("indexController", ["$scope", "$rootScope", "$location", "$window",
	"$http", "$routeParams",
	function ($scope, $rootScope, $location, $window, $http, $routeParams){
	    console.log("Here in indexController!");

	    $scope.loginUser = function(){
	    	// console.log("Hello");
	    	$window.localStorage['loggedIn'] = true;
	    	$window.location.href = "#!/profile/" + $scope.username;
	    	// console.log($scope.username);
	    }

	    $scope.logoutUser = function(){
	    	$window.localStorage['loggedIn'] = false;
	    }

	    $scope.isLoggedIn = function(){
	    	console.log($window.localStorage['loggedIn']);
	    	return $window.localStorage['loggedIn'];
	    }


	}]);