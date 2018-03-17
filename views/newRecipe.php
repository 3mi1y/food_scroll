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
	    <title>FoodCabulary</title>
	    
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
		    $(document).ready(function(){
		    	var start = 1;
			    $("#btn1").click(function(e){
			    	e.preventDefault();
			        $("#ingredientsList").append("<br><div>Ingredient " + (start + 1) + ": <input type='text' class='form-control' name='mytext[]'><a href='#' class='remove_field'>Remove</a></div>");
			   		start = start + 1;
			    });

			    $("#ingredientsList").on("click",".remove_field", function(e) {
			    	e.preventDefault();
			    	$(this).parent('div').remove(); 
			    	start = start - 1;
			    });
			});
		</script>

	</head>

	<body>

		<?php
			include '../includes/masterPage.php';
			createNavBar();
		?>

		<center>
			
			<div class='header'>
					<h1>Build Your Recipe</h1>
			</div>

			<div class="master-form">
				<div class="form">
					<form method="post" action="../app_code/collect_ingredients.php">
							<h3>Recipe Name</h3>
							<p>Enter a descriptive title for your recipe.</p>
							<input type="text" class="form-control" name="recipeName">

							<h3>Recipe Category</h3>
							<p>Where does this recipe belong?</p>
							<select class="form-control" name="category">
								<option value='other'>Other</option>
								<option value='breakfast'>Breakfast</option>
								<option value='lunch'>Lunch</option>
								<option value='dinner'>Dinner</option>
								<option value='snack'>Snack</option>
								<option value='dessert'>Dessert</option>
							</select>

							<h3>Enter Your Ingredients:</h3>
							<p>Add as many ingredients as you like!</p>
							<div id="ingredientsList">
								Ingredient 1:
								<input type="text" class="form-control" name="mytext[]">
							</div>
							<br>
							<button id="btn1">Add Another Ingredient</button>

							<hr>

							<h3>Instructions:</h3>
							<p>Tell us how to make your wonderful recipe!</p>
							<textarea class="form-control" rows="4" cols="70" name="instructions"></textarea>

							
							<input type="submit" name="submit" value="Submit">
					</form>
				</div>
			</div>
		</center>
	</body>
</html>