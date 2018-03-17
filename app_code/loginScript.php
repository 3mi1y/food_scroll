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
				include '../includes/masterPage.php';
				createSignInUpNavBar();
			?>
			<p>
			<h4>Oops! Looks lke some of your information was incorrect, you can <br><a href="../views/SignIn.php">Try Again Here</a><br> or <br><a href="../views/SignUp.php">Join The Community</a></h4>
			</p>
<?php


	$username = $_POST['user'];
	$pass = $_POST['pass'];
	//$user = intval($username);

	include '../app_code/Database_Access.php';
	$conn = newConnection();

	$sql = "SELECT username FROM USER WHERE userID='".$username."' AND password = '".$pass."';"; 
	
	
	//$sql = "SELECT uesrID FROM USER WHERE username=".$user." AND password = '".$pass."';";

	$result = mysqli_query($conn, $sql);

	//this if statement block decedes whether or not the process should go on based on whether or not we were able to even connect to the database and run the command
	if(!$result) {
		echo "Database Error"; //this would be a good place to have a header pointing to a landing page for errors
		die("MySQL Error: ".mysql_error());
	} else {
		$row = mysqli_fetch_assoc($result);
		$userID = $row['username'];
		//if we get a row that matches the user input, we redirect them to the user home page
		if(sizeof($row) > 0) {
            session_start();
			$_SESSION['logged_in'] = 1;
			$_SESSION['username'] = $username;
			$_SESSION['userID'] = $userID;
			//$_SESSION['userID'] = $userID;
			header("Location: ../views/UserHomePage.php");
		}

	}


?>


</body>
</html>