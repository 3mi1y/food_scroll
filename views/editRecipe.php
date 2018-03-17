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

			$originalRecipeName = $_POST['recipeName'];

			//**********************************
			// Get Recipe info to display based on the userID and the recipeName
			//**********************************
			$result = getAllRecipeInformation($userID, $originalRecipeName);
			
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$name = $row['name'];
					$date = $row['dateCreated'];
					$instructions = $row['instructions'];
					$typeID = $row['typeID'];
					$recipeID = $row['recipeID'];
				}
			}

		?>

		<div class="master-form">
			<div class="form">
				<form method="post" action="../app_code/collect_edited_ingredients.php">
					<center>
						<h3>New Name:</h3>
						<input type="text" class="form-control" name="recipeName" value="<?php echo $name; ?>">

						<h3>Change Recipe Category:</h3>
						<select class="form-control" name="category">
							<?php if(strcmp($typeID,'8') === 0) {echo "<option value='other' selected='true'>Other</option>";} else {echo "<option value='other'>Other</option>";} ?>
							<?php if(strcmp($typeID,'3') === 0) {echo "<option value='breakfast' selected='true'>Breakfast</option>";} else {echo "<option value='breakfast'>Breakfast</option>";} ?>
							<?php if(strcmp($typeID,'4') === 0) {echo "<option value='lunch' selected='true'>Lunch</option>";} else {echo "<option value='lunch'>Lunch</option>";} ?>
							<?php if(strcmp($typeID,'5') === 0) {echo "<option value='dinner' selected='true'>Dinner</option>";} else {echo "<option value='dinner'>Dinner</option>";} ?>
							<?php if(strcmp($typeID,'6') === 0) {echo "<option value='snack' selected='true'>Snack</option>";} else {echo "<option value='snack'>Snack</option>";} ?>
							<?php if(strcmp($typeID,'7') === 0) {echo "<option value='dessert' selected='true'>Desserts</option>";} else {echo "<option value='dessert'>Desserts</option>";} ?>
						</select>

						<h3>Modify Your Ingredients:</h3>
					
							<?php
								$ingredients = getRecipeIngredients($userID, $recipeID);

								while($row = mysqli_fetch_assoc($ingredients)) {
									$name = $row['name'];
									echo "<br><input type='text' class='form-control' value='$name' name='myText[]'>";
								}
							?>
						<hr>

						<h3>Change the Instructions:</h3>
						<textarea class="form-control" rows="4" cols="70" name="instructions"><?php echo htmlspecialchars($instructions); ?></textarea>

						<input type='hidden' value='<?php echo $originalRecipeName; ?>' name='originalRecipeName'>
						<input type='hidden' value='<?php echo $recipeID; ?>' name='recipeID'>
						
						<input type="submit" name="submit" value="Submit">
					</center>
				</form>
			</div>
		</div>















