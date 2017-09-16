'use strict';

angular.module("controllers.userController", [])
.controller("userController", ["$scope", "$rootScope", "$location", "$window",
	"$http", "$routeParams",
	function ($scope, $rootScope, $location, $window, $http, $routeParams){
	    console.log("Here in userController!");

	    // $scope.loginUser = function(){
	    // 	$window.location.href = "#!/";
	    // 	// console.log($scope.username);
	    // }
	}]);