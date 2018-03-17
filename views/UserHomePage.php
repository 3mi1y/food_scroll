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
		<link rel="stylesheet" href="../rescources/css/custom.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	    <!--Defines the font-->
	    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	</head>

	<body>
	<?php
		//********************************
		// Create the main-nav bar
		//********************************
		include '../app_code/Database_Access.php';
		include '../includes/masterPage.php';
		createNavBar();

		//********************************
		// Query the database for the users firstName and their profile picture.
		//********************************
		$conn = newConnection();		
		$sql = "SELECT profilePic, fName FROM USER WHERE username = $userID";
		
		//$pic = mysql_fetch_array($sql);
		//echo $sql;
		$result = mysqli_query($conn, $sql) or die ("Query Failed.");
		
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$imagePath = $row['profilePic'];
				$fName = $row['fName'];
			}
		} else {
			$imagePath = 'images/blankpic.jpg';
		}
		
	?>

		<div>
			<br><br><br><br>
			<h1>
				 Welcome <?php echo $fName; ?>!
			</h1>
		</div>

		<div id="profilePic">
			<center>
			<img style="border-radius: 50%; width: 300px; height: 300px;" src=<?php echo $imagePath; ?>>
			</center>
		</div>

		<div class='user-nav'>
	        <ul>
	            <li>
	                <a href="UploadPic.php">Edit your profile</a>
	            </li>
	            <li>
	                <a href="viewRecipes.php">View Your Recipes</a>
	            </li>
	            <li>
	                <a href="newRecipe.php">Create a New Recipe</a>
	            </li>
	            <li>
	                <a href="#">Plan Your Week</a>
	            </li>
							<li>
	                <a href="../app_code/logout.php">Logout</a>
	            </li>
	        </ul>
    	</div>
			
			<!--Picture upload -->
			
		<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
		

	</body>

</html>