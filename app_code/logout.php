<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>FoodCabulary</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
				<link rel="stylesheet" href="../rescources/css/custom.css">
			
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	    <!--Defines the font-->
	    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	</head>
	<body>
	
		<?php
				include '../includes/masterPage.php';
				createSignInUpNavBar();
			?>
			
			<p>
			<h4>You have successfully logged out!
			</p>
			
			
			<!-- LOG OUT -->
			<?php
			session_start();
			unset($_SESSION['logged_in']);
			unset($_SESSION['username']);
			unset($_SESSION['userID']);
			?>
			