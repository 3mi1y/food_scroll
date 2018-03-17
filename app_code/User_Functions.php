<?php

class userFunctions {
	
	include($_SERVER["DOCUMENT_ROOT"]."/app_code/Database_Connection.php");

	function userSignup($firstName, $lastName, $email, $phoneNumber, $birthday) {

		DataAcess myAcess = new DataAcess();

		$connection = myAcess.newConnection();

		$query = "INSERT INTO USERS (firstName, lastName, password, email, phoneNumber, contribution/rank) VALUES 
		($firstName, $lastName, $email, $phoneNumber, $birthday);";

		mysqli_query($conn, $connection)

		mysqli_close($conn);
	}

	function userLogin($email, $password) {
		DataAcess myAcess = new DataAcess();

		$connection = myAcess.newConnection();

		$query = "SELECT * FROM USERS WHERE email=$email and pass=$password;";

		$result = mysqli_query($query, $connection);

		$row = mysql_fetch_array($result)

		//this says that if we find a matching username and password in the db (of course also matching)
		//what the user entered and we entered through the parameters, then the number of rows will be greater
		//than 0, thus, we can grab the first element of the row (this will be the id of the user) and store this in
		//a session. Else we will return 0, because, no user can have an id of 0

		if($row > 0) {
			$id = $row[0]; 
		} else {
			$id = 0;
		}			

		return $id;				
	}		

	function deleteUser($id) {
		DataAcess myAcess = new DataAcess();

		$connection = myAcess.newConnection();

		$query = "DELETE FROM USERS WHERE id=$id;";

		mysqli_query($query, $connection);
	}

	function addFriend($userOneID, $userTwoID) {
		//this funtion will allow us to add two friends to the friend table in the db
		DataAcess myAcess = new DataAcess();

		$connection = myAcess.newConnection();

		$query = "INSERT INTO FRIENDS (userOneID, userTwoID) VALUES ($userOneID, $userTwoID);";

		mysqli_query($query, $connection);
	}

	function deleteFriendship($userOneID, $userTwoID) {
		DataAcess myAcess = new DataAcess();

		$connection = myAcess.newConnection();

		//need to make sure that we delete from the friends table where both user id's exist otherwise we would delete all 
		//of the friendships for one person
		$query = "DELETE FROM FRIENDS WHERE userOneID=$userOneID and userTwoID=$userTwoID;"; 

		mysqli_query($query, $connection);
	}

	//we will probably be adding more functions in the future, these are some of the basic ones to get us started
}
	
?>