<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>FoodCabulary</title>
	    
	</head>

	<body>

	<div id = form>
	<form action = "UserHomePage.php" method = "POST">

	<p>
	<label> Username: </label>
		<input type = "text" id ="user" name = "user"/>
	</p>
	<p>
	<label> Password: </label>
		<input type = "text" id ="pass" name = "pass"/>

	</p>
	<p>
	<input type = "submit" id = "btn" value="Login"/>

	</p>
	

	</form>

	</div>

	<?php

			//Get Values passed from the login page file

			$username = $_POST['user'];
			$password = $_POST['pass'];
			echo $username;
			echo $password;
			// to prevent mysql injection
			/*
			$username = stripcslashes($username);
			$password = stripcslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
*/
			// connect to the server 
			//mysql_connect("localhost", "root", "ourAmazingServerPassword");
			//mysql_select_db("CSCI411");

			/*
			$conn = new mysqli("localhost", "root", "ourAmazingServerPassword");

			// Check connection
			if ($conn->connect_error) {
		    	die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
			*/

			//include '../app_code/Database_Access.php';
				//		newConnection();
			
			//Query the database for user

			include '../app_code/Database_Access.php';
			$conn = newConnection();
			echo "Connection Success!"
/*
			$sql = "SELECT * FROM USER WHERE username = '".$username."' and password = '".$password."';";
			$result = mysqli_query($conn, $sql);

			$row = mysql_fetch_array($result);
			
			if ($row['username'] == $username and $row['password'] == $password) 
			{
				echo "Login was successful! Welcome to FoodCabulary".$row['username'];
			} 
			else 
			{
				echo "Login Failed";
			}
	*/

	?> 




		
	</body>

	</html>


	












