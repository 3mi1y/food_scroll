<!DOCTYPE html>
<html lang="en">
<head>


</head>
<body>


<?php
	echo "omg";
	
	include 'app_code/Database_Access.php';
	$conn =	newConnection();
	
	//Get Values passed from the login page file

	$username = $_POST['user'];
	$password = $_POST['pass'];

	echo" still working";

	// to prevent mysql injection
	//$username = stripcslashes($username);
	//$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);

	//connect to the server 
	//mysql_connect("localhost", "root", "ourAmazingServerPassword", "CSCI411");
	//mysql_select_db("CSCI411");

	echo" still working??????";

	//$conn = new mysqli("localhost", "root", "ourAmazingServerPassword");

	//Check connection
	//if ($conn -> connect_error) {
    //die("Connection failed: " . $conn->connect_error);
	//} 
	
	echo "Connected successfully";
	

	//Query the database for user
	$result = "SELECT * FROM USER WHERE username = '$username' and password = '$password'";

	$row = mysql_fetch_array($result);
	
	if ($row['username'] == $username and $row['password'] == $password) 
	{
		echo "Login was successful! Welcome to FoodCabulary".$row['username'];
		header("Location: views/UserHomePage.php");
	} 
	else 
	{
		echo "Login Failed";
	}
	

	?> 
	</body>
	</html>

	