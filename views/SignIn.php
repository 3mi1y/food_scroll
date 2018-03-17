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
		

	<div>
	<h1>
	Welcome Back!

	</h1>

	</div>			

		<!-- LOG IN -->

<div class="container-fluid">

	<h4>Sign In</h4>
	
	<form method = "post", action = "../app_code/loginScript.php">

	<button type="button" class="btn btn-success center-block" data-toggle="modal" data-target="#popUpWindow">Sign In</button>
	
	<div class="modal fade" id="popUpWindow">
		<div class="modal-dialog">
			<div class="model-content">
			
			
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Sign In</h3>
			</div>
			
			<div class="modal-body">
				<form role="form" >
					<div class="form-group">
						<input type="username" id = "user" class="form-control" placeholder="Username" name ="user">
					</div>
					<div class="form-group">
						<input type="password" id = "pass" class="form-control" placeholder="Password" name = "pass">
					</div>
				
			</div>
			
	
			<div class="modal-footer">

			<button class="btn btn-primary">Sign In</button>
			
		</div>
		</div>
		</div>
		</div>
		</div>
		</form>


		<div>
		<center><img src="../rescources/images/FinalFoodStrip.jpg" alt="PhotoBooth" style="width:100%;height:120px;"></center>
		</div>
	
	</body>

	</html>


	


	