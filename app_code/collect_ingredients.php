<?php
	session_start();
	$userID = $_SESSION['userID'];

	include 'Database_Access.php';
	$conn = newConnection();
	
	//check to see how many ingredients the user added so that we know how many ingredients to insert into the database
	$number_of_ingredients = sizeof($_POST['mytext']);

	$recipeName = $_POST[recipeName];
	$instructions = $_POST[instructions];
	$category = $_POST[category];

	$recipeName = htmlspecialchars($recipeName, ENT_QUOTES, 'UTF-8');
	$instructions = htmlspecialchars($instructions, ENT_QUOTES, 'UTF-8');
	$category = htmlspecialchars($category, ENT_QUOTES, 'UTF-8');

	//get the mealTypeID based on the meal category the user said the recipe belongs to
 	$sql3 = "SELECT typeID FROM MEAL_TYPE WHERE name='".$category."';";
 	$result = mysqli_query($conn, $sql3) or die ("Query Failed.");

 	if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$typeID = $row['typeID'];
		}
	}

	//don't allow users to enter empty text into the database
	if($recipeName != "") {
		//Insert into recipe table
		$stmt1 = $conn->prepare("INSERT INTO RECIPES (name, instructions, typeID) VALUES (?, ?, ?)");
		$stmt1->bind_param("ssd", $recipeName, $instructions, $typeID);
		if($stmt1->execute()) {
			$last_id = $conn->insert_id;
			$stmt1->close();
		} else {
			header('Location: views/error.php');
		}
	 
	} else {
		echo "Oops! Looks like you forgot to give your recipe a name!";
	}


	//this inserts the recipeID and the userID into the USER_HAS_RECIPES table, this will allow us to view all of the recipes that a user has.
	$stmt2 = $conn->prepare("INSERT INTO USER_HAS_RECIPES (userID, recipeID) VALUES (?,?)");
	$stmt2->bind_param("sd", $userID, $last_id);
	if($stmt2->execute()) {
		$stmt2->close();
	} else {
		header('Location: views/error.php');
	}
	


 	//this is a tricky part. We need to submit ingredients into the custom ingredient table, remember, each ingredient belongs to a recipe, so in order to associate the ingredient with the recipe we need to insert the primary key of the recipe as a foreign key in the ingredients table, this is why we insert $last_id variable for every ingredient 
 	for ($x = 0; $x < $number_of_ingredients; $x++) {
 		$ingredient_name = $_POST["mytext"][$x];
 		//$ingredient_name = htmlspecialchars($ingredient_name, ENT_QUOTES, 'UTF-8');
 		echo $ingredient_name;
 		//don't let the user enter in blank ingredients
 		if($ingredient_name != "") {
 			$stmt3 = $conn->prepare("INSERT INTO CUSTOM_INGREDIENTS (recipeID, name) VALUES (?, ?)");
			$stmt3->bind_param("ds", $last_id, $ingredient_name);	

		 	if($stmt3->execute()) {
		 		//eventually, this needs to lead to a confirmation page
		 		header("Location: ../views/confirmation.php");
		 		$stmt3->close();
		 	} else {
		 		header("Location: ../views/error.php");
		 	}
 		} else {
 			echo "Oops! Please don't leave any ingredients blank!";
 		}

 	}

?>