'use strict';

var app = angular.module("myApp", ["ngRoute", "controllers.indexController"]);
app.config(function($routeProvider){
    $routeProvider
    .when("/", {
        templateUrl : "partials/home.php"
    })
    .when("/login", {
        templateUrl : "partials/login.php",
        controller: "indexController"
    })
    .when("/profile/:username", {
        templateUrl : "partials/profile.php"
    })
    .when("/register", {
        templateUrl : "partials/register.php"
    })
    .otherwise({
        redirectTo: "/"
    });
});