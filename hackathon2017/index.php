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
	<script src="app.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<a href="#!/"><img class="img-responsive navbar-icon" src="img/nav-icon.png" /></a>
		<div class="navbar-brand"><a href="#!/">Pagta-o</a>
		</div>
	</nav>
	<section ng-view></section>
	<footer>
		<p class="text-center">This is something I did while not yet sabaw.</p>
	</footer>
</body>
</html>