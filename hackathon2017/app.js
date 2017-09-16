'use strict';

var app = angular.module("myApp", ["ngRoute", "controllers.indexController"]);
app.config(function($routeProvider){
    $routeProvider
    .when("/", {
        templateUrl : "partials/home.php",
        controller: "indexController"
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
    .when("/users/:username", {
        templateUrl : "partials/usersHome.php",
        controller: "userController.js"
    })
    .otherwise({
        redirectTo: "/"
    });
});