'use strict';

var app = angular.module("myApp", ["ngRoute", "controllers.indexController"]);
app.config(function($routeProvider){
    $routeProvider
    .when("/hello", {
        templateUrl : "index.php",
        controller: "indexController"
    });
});