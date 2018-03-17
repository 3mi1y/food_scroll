<?php

//**********************************************************************
	//Display All Recipes 
//**********************************************************************
	function displayAllRecipes () {
			session_start();
			$userID = $_SESSION['userID'];
			echo $userID;

			include 'Database_Access.php';
			$conn = newConnection();

			$sql = "SELECT name FROM RECIPES INNER JOIN USER_HAS_RECIPES ON RECIPES.recipeID = USER_HAS_RECIPES.recipeID WHERE userID=$userID";

			$result = mysqli_query($conn,$sql) or die("Query failed ");

			//print results in html
			echo"<h1>RECIPES</h1>";

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$recipeName = $row[name];
				echo "<a href='recipe.php?name=".$recipeName."'>".$recipeName."</a><br>";
			}
		}
		//Free result set
		mysqli_free_result($result);

		//close connection
		mysqli_close($link);
	}

//**********************************************************************
	//Display Breakfast Recipes
//**********************************************************************
	function displayBreakfastRecipes($userID) {

		$conn = newConnection();

		$sql = "SELECT name FROM RECIPES INNER JOIN USER_HAS_RECIPES ON RECIPES.recipeID = USER_HAS_RECIPES.recipeID WHERE userID=$userID AND typeID=3;";

		$result = mysqli_query($conn,$sql) or die("Query failed ");

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$recipeName = $row[name];
				echo "<a href='recipe.php?name=".$recipeName."'>".$recipeName."</a><br>";
			}
		}
		//Free result set
		mysqli_free_result($result);

		//close connection
		mysqli_close($link);

	}

//**********************************************************************
	//Display Lunch Recipes
//**********************************************************************
	function displayLunchRecipes($userID) {

		$conn = newConnection();

		$sql = "SELECT name FROM RECIPES INNER JOIN USER_HAS_RECIPES ON RECIPES.recipeID = USER_HAS_RECIPES.recipeID WHERE userID=$userID AND typeID=4;";

		$result = mysqli_query($conn,$sql) or die("Query failed ");

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$recipeName = $row[name];
				echo "<a href='recipe.php?name=".$recipeName."'>".$recipeName."</a><br>";
			}
		}
		//Free result set
		mysqli_free_result($result);

		//close connection
		mysqli_close($link);

	}

//**********************************************************************
	//Display Dinner Recipes
//**********************************************************************
	function displayDinnerRecipes($userID) {

		$conn = newConnection();

		$sql = "SELECT name FROM RECIPES INNER JOIN USER_HAS_RECIPES ON RECIPES.recipeID = USER_HAS_RECIPES.recipeID WHERE userID=$userID AND typeID=5;";

		$result = mysqli_query($conn,$sql) or die("Query failed ");

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$recipeName = $row[name];
				echo "<a href='recipe.php?name=".$recipeName."'>".$recipeName."</a><br>";
			}
		}
		//Free result set
		mysqli_free_result($result);

		//close connection
		mysqli_close($link);

	}

//**********************************************************************
	//Display Snacks Recipes
//**********************************************************************
	function displaySnacksRecipes($userID) {

		$conn = newConnection();

		$sql = "SELECT name FROM RECIPES INNER JOIN USER_HAS_RECIPES ON RECIPES.recipeID = USER_HAS_RECIPES.recipeID WHERE userID=$userID AND typeID=6;";

		$result = mysqli_query($conn,$sql) or die("Query failed ");

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$recipeName = $row[name];
				echo "<a href='recipe.php?name=".$recipeName."'>".$recipeName."</a><br>";
			}
		}
		//Free result set
		mysqli_free_result($result);

		//close connection
		mysqli_close($link);

	}

//**********************************************************************
	//Display Sweet Recipes
//**********************************************************************
	function displaySweetsRecipes($userID) {

		$conn = newConnection();

		$sql = "SELECT name FROM RECIPES INNER JOIN USER_HAS_RECIPES ON RECIPES.recipeID = USER_HAS_RECIPES.recipeID WHERE userID=$userID AND typeID=7;";

		$result = mysqli_query($conn,$sql) or die("Query failed ");

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$recipeName = $row[name];
				echo "<a href='recipe.php?name=".$recipeName."'>".$recipeName."</a><br>";
			}
		}
		//Free result set
		mysqli_free_result($result);

		//close connection
		mysqli_close($link);

	}

//**********************************************************************
	//Display Other Recipes
//**********************************************************************
	function displayOther($userID) {

		$conn = newConnection();

		$sql = "SELECT name FROM RECIPES INNER JOIN USER_HAS_RECIPES ON RECIPES.recipeID = USER_HAS_RECIPES.recipeID WHERE userID=$userID AND typeID=8;";

		$result = mysqli_query($conn,$sql) or die("Query failed ");

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$recipeName = $row[name];
				echo "<a href='recipe.php?name=".$recipeName."'>".$recipeName."</a><br>";
			}
		}
		//Free result set
		mysqli_free_result($result);

		//close connection
		mysqli_close($conn);

	}

//**********************************************************************
// Get recipe info including: recipeID, dateCreated, instructions and mealTypeID
//**********************************************************************
	function getAllRecipeInformation($userID, $recipeName) {
		$conn = newConnection();

		$sql = "SELECT RECIPES.name, RECIPES.recipeID, RECIPES.dateCreated, RECIPES.instructions, RECIPES.typeID FROM RECIPES INNER JOIN USER_HAS_RECIPES ON RECIPES.recipeID = USER_HAS_RECIPES.recipeID WHERE userID=$userID AND name='$recipeName';";

		$result = mysqli_query($conn,$sql) or die("Query failed ");

		if(mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No results were found for this query.";
		}
		mysqli_close($conn);

	}

//**********************************************************************
// Get recipe ingredients
//**********************************************************************
	function getRecipeIngredients($userID, $recipeID) {

		$conn = newConnection();

		$sql = "SELECT name FROM CUSTOM_INGREDIENTS WHERE recipeID=$recipeID";

		$result = mysqli_query($conn,$sql) or die ("Query Failed");

		if(mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No results were found for this query.";
		}

		mysqli_close($conn);
	}












?>