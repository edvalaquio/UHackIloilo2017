'use strict';

var app = angular.module("myApp", ["ngRoute", "controllers.indexController"]);
app.config(function($routeProvider){
    $routeProvider
    .when("/", {
        templateUrl : "partials/home.php",
        controller: "indexController"
    })
    .when("/login", {
        templateUrl : "partials/login.php"
    })
    .when("/register", {
        templateUrl : "partials/register.php"
    });
});