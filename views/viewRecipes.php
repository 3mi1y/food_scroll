<?php
//this block of php code makes sure that a user can't access the page unless he or she is logged in
	session_start();
	$userID = $_SESSION['userID'];

	if($userID == '') {
		header("Location: SignIn.php");
	}

?>	

<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>FoodScroll</title>
	    
	    <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="../rescources/css/emilyCustom.css">
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    	<!--Defines the font-->
    	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	    <script>
	    	$(document).ready(function() {
	    		$("#breakfastDisplay").hide();
	    		$("#lunchDisplay").hide();
	    		$("#dinnerDisplay").hide();
	    		$("#snacksDisplay").hide();
	    		$("#sweetsDisplay").hide();
	    		$("#otherDisplay").hide();

	    		$("#breakfastBlock").click(function() {
	    			$("#breakfastDisplay").slideToggle();
	    		});

	    		$("#lunchBlock").click(function() {
	    			$("#lunchDisplay").slideToggle();
	    		});

	    		$("#dinnerBlock").click(function() {
	    			$("#dinnerDisplay").slideToggle();
	    		});

	    		$("#snacksBlock").click(function() {
	    			$("#snacksDisplay").slideToggle();
	    		});

	    		$("#sweetsBlock").click(function() {
	    			$("#sweetsDisplay").slideToggle();
	    		});

	    		$("#otherBlock").click(function() {
	    			$("#otherDisplay").slideToggle();
	    		});

	    	});
	    </script>
	</head>
	<body>
		<?php
			include '../includes/masterPage.php';
			include '../app_code/Recipe_Functions.php';
			include '../app_code/Database_Access.php';
			createNavBar();
		?>

		<div class="viewRecipes"> 
			<center>
				<br><br><br>
				<h1>Your Recipes</h1>
				<p>Click on the categories to view your recipes.</p>

				<div class='sliders'>
					<div class='block' id='breakfastBlock'>
						Breakfast Recipes&nbsp&nbsp<span style="font-size: 10px" class="glyphicon glyphicon-menu-down"></span>
					</div>

					<div id='breakfastDisplay'>

						<?php
							displayBreakfastRecipes($userID);
						?>
					</div>

					<div class='block' id='lunchBlock'>
						Lunch Recipes&nbsp&nbsp<span style="font-size: 10px" class="glyphicon glyphicon-menu-down"></span>
					</div>

					<div id='lunchDisplay'>
						<?php
							displayLunchRecipes($userID);
						?>
					</div>

					<div class='block' id='dinnerBlock'>
						Dinner Recipes&nbsp&nbsp<span style="font-size: 10px" class="glyphicon glyphicon-menu-down"></span>
					</div>

					<div id='dinnerDisplay'>
						<?php
							displayDinnerRecipes($userID);
						?>
					</div>

					<div class='block' id='snacksBlock'>
						Snack Recipes&nbsp&nbsp<span style="font-size: 10px" class="glyphicon glyphicon-menu-down"></span>
					</div>

					<div id='snacksDisplay'>
						<?php
							displaySnacksRecipes($userID);
						?>
					</div>

					<div class='block' id='sweetsBlock'>
						Desserts and Sweets&nbsp&nbsp<span style="font-size: 10px" class="glyphicon glyphicon-menu-down"></span>
					</div>

					<div id='sweetsDisplay'>
						<?php
							displaySweetsRecipes($userID);
						?>
					</div>

					<div class='block' id='otherBlock'>
						Everything Else&nbsp&nbsp<span style="font-size: 10px" class="glyphicon glyphicon-menu-down"></span>
					</div>

					<div id='otherDisplay'>
						<?php
							displayOther($userID);
						?>
					</div>
				</div>

			</center>
		</div>
	</body>
</html>