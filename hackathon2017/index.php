<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title>Pagta-o</title>

	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link href="css/bootswatchpapertheme.min.css" rel="stylesheet">
	<link href="css/default.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-route.js"></script>
	<script src="controllers/indexController.js"></script>
	<script src="app.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#!/"><span class="glyphicon glyphicon-link"></span> Pagta-o</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#!/login">Login</a></li>
					<li><a href="#!/register">Register</a></li>
		        </ul>
		    </div>
		</div>
	</nav>
	<section ng-view></section>
	<footer>
		<p class="text-center">This is something I did while not yet sabaw.</p>
	</footer>
</body>
</html>