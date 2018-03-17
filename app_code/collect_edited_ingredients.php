<?php
	session_start();
	$userID = $_SESSION['userID'];

	include 'Database_Access.php';
	$conn = newConnection();
	
	//check to see how many ingredients the user added so that we know how many ingredients to insert into the database
	$number_of_ingredients = sizeof($_POST['myText']);

	$originalRecipeName = $_POST[originalRecipeName]; //we query database with this recipe name
	$potentiallyNewRecipeName = $_POST[recipeName]; //we will update database with this potentially new name
	$instructions = $_POST[instructions]; //update new instructions
	$category = $_POST[category]; //update new category
	$recipeID = $_POST[recipeID];


	//get the mealTypeID based on the meal category the user said the recipe belongs to
 	$sql3 = "SELECT typeID FROM MEAL_TYPE WHERE name='".$category."';";
 	$result = mysqli_query($conn, $sql3) or die ("Query Failed.");

 	if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$typeID = $row['typeID'];
		}
	}

	echo $typeID;

	//don't allow users to enter empty text into the database
	
	//Update recipe in table
	$sql = "UPDATE RECIPES SET name='$potentiallyNewRecipeName', instructions='$instructions', typeID=$typeID WHERE recipeID=$recipeID;";
		
	if ($conn->query($sql) === TRUE) {
    	header('Location: ../views/confirmation_edit.php');
	} else {
   		echo "Error updating record: " . $conn->error;
	}
/*
	 	if(mysqli_query($conn, $sql)) {
	 		//we save the id of the recipe we inserted in the variable $last_id
	 		echo "Success!";
	 	} else {
	 		header("Location: views/error.php");
	 	}
*/
?>