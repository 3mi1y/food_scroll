<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>FoodScroll</title>
	    
	    <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="../rescources/css/custom.css">
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    	<!--Defines the font-->
    	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	</head>
	<body>
		<?php
			include '../includes/masterPage.php';
			createNavBar();
		?>

		<center>
			<h1>
				Success!
			</h1>
			<h4>
				You've created a recipe! What will you do now?<br>Maybe you should  <a href="newRecipe.php">create another one.</a><br>
				or <a href="viewRecipes.php">view your recipes</a>
			</h4>
		</center>
	</body>
</html>