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
</head>
<body>

				
		<?php
			include '../includes/masterPage.php';
			createNonLoggedInNavBar();
		?>

		
	
			<div class= "container">
			<h1>
			OUR RECIPES
			</h1>
			</div>
	
	<?php
		include '../app_code/Database_Access.php';
		$conn = newConnection();

		$sql = "SELECT name,instructions FROM RECIPES;";
	

	$result = mysqli_query($conn, $sql);

	//this if statement block decedes whether or not the process should go on based on whether or not we were able to even connect to the database and run the command
	if(!$result) 
	{
		echo "Database Error"; //this would be a good place to have a header pointing to a landing page for errors
		die("MySQL Error: ".mysql_error());
	} 
	else 
	{
		
		echo "<table>"; // start a table tag in the HTML
		echo '<table cellpadding="0" cellspacing="0">';
		echo '<tr><th><th>RECIPE</th><th></td><td>COOKING INSTRUCTIONS</th><th>';
		while($row = mysqli_fetch_assoc($result))
		{   //Creates a loop to loop through results

		echo "<tr><td><br>" ."</td><td><br>". $row['name'] . "</td><td><br>" ."</td><td><br>". $row['instructions'] . "</td></tr>" ;  
		}

		echo "</table>"; //Close the table in HTML
		
	}

		

	?>
			

			

</body>
</html>