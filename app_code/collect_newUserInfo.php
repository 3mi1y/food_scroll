<?php
//session_start();


include '../app_code/Database_Access.php';



$UserID = $_POST[UserID];
$Password = $_POST[Password];
$fName = $_POST[fName];
$lName = $_POST[lName];
$Email = $_POST[email];
$PhoneNumber = $_POST[phoneNumber];
$Birthday = $_POST[birthday];


//this gets the values from the radio buttons
if(isset($_POST['submit'])) 
{
	$Gender = $_POST['gender'];
}

$conn = newConnection();


if($UserID != "" and $Password != "" and $fName != "" and $lName != "" and $Email != "" and $PhoneNumber != "" and $Birthday != "") {
		
		if(strlen($PhoneNumber) > 15) 
		{
		echo '<script language="javascript">';
		echo 'alert("Please double check your phone number")';
		echo '</script>';
		
		}
	 	
		$sql = "INSERT INTO USER (userID, password, fName, lName, email, phoneNumber, birthday, gender) VALUES ('$UserID', '$Password', '$fName', '$lName', '$Email', '$PhoneNumber', '$Birthday', '$Gender')";

		//$result = mysqli_query($conn, $sql);
	 	
		$result = $conn->query($sql);

	 	if ($result === TRUE) {
	 	//this is not working check how to display the message before redirecting
	 	echo '<script language="javascript">';
		echo 'alert("Congrats! Your account has been created! You will be redirected to the Sign In Page to sign in!")';
		echo '</script>';
	 	header( "refresh:3; url=../views/SignIn.php");
		
		} 
		
	
	
else {
	//REPLACE THIS ERROR WITH AN ERROR PAGE
    echo "Error: " . $sql . "<br>" . $conn->error;
    
}
		
	} 
	
	else {
		echo "Oops! Looks like you forgot some of the required information!";
	}

/*else {
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
		} */	

//$result = mysqli_query($conn, $sql);


//if(!$result) {
//		echo "Database Error"; //this would be a good place to have a header pointing to a landing page for errors
//		die("MySQL Error: ".mysql_error());
//		header("Location: views/error.php");
//	} 
	


?>