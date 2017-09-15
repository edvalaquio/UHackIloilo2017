<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title>Pagbulig - Hackathon 2017</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootswatchpapertheme.min.css" rel="stylesheet">
	<link href="css/default.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-route.js"></script>
	<script src="controllers/indexController.js"></script>
	<script src="controllers/userController.js"></script>
	<script src="app.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="navbar-brand"><a href="#!/">Pagbulig</a></div>
	</nav>
	<section ng-view></section>
	<footer>
		<p class="text-center">This is something I did while not yet sabaw.</p>
	</footer>
</body>
</html>