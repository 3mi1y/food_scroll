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
	</head>

	<body>
		<?php
			include '../includes/masterPage.php';
			include '../app_code/Database_Access.php';
			include '../app_code/Recipe_Functions.php';
			createNavBar();

			$recipeName = $_GET['name'];


			//**********************************
			// Get Recipe info to display based on the userID and the recipeName
			//**********************************
			$result = getAllRecipeInformation($userID, $recipeName);
			
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$date = $row['dateCreated'];
					$instructions = $row['instructions'];
					$typeID = $row['typeID'];
					$recipeID = $row['recipeID'];
				}
			}

		?>
			
		<center> 

		<div class='header'>
			<h1>
				<?php echo $recipeName; ?>
			</h1>
		</div>

		<br>

		<div class="viewRecipe">
			<br><br>
			<h2>Ingredients</h2>
			<p>
				<?php 
					//**********************************
					// Get the ingredients to display based on the userID and the recipeID
					//**********************************
					$ingredientsResults = getRecipeIngredients($userID, $recipeID);

					while($row = mysqli_fetch_assoc($ingredientsResults)) {
						$name = $row['name'];
						echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8')."<br>";
					}
				?>
				
			</p>

			<br>
			<br>

			<h2>Instructions</h2>
			
			<div id='pre-tag-format'>
				<pre>
					<p>
						<?php echo htmlspecialchars($instructions, ENT_QUOTES, 'UTF-8'); ?>
					</p>
				</pre>
			</div>
		
		<br>

		<p>Date Created:&nbsp<?php echo htmlspecialchars($date); ?></p>
		<br><br>

		<form action='editRecipe.php' method='post'>
			<input type='hidden' name='recipeName' value='<?php echo htmlspecialchars($recipeName); ?>'>
			<input class='btn btn-default' type='submit' value='Edit'>
		</form>

		<br>

		<button class='btn btn-default'><a href="confirmation_delete.php?recipe=<?php echo htmlspecialchars($recipeID); ?>">Delete</a></button> <br><br>
		<h4>Would you like to add the ingredients for this recipe to your list?</h4>
		<button class='btn btn-default'>Add +</button>
		</center>

		</div>
	</body>
</html>