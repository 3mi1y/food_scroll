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

	    
	     <!-- Slider -->
    	<script src="http://uguru-realestate-us-jun202013.businesscatalyst.com/3d-slider/sliderengine/jquery.js"></script>
    	<script src="http://uguru-realestate-us-jun202013.businesscatalyst.com/3d-slider/sliderengine/amazingslider.js"></script>
    	<script src="http://uguru-realestate-us-jun202013.businesscatalyst.com/3d-slider/sliderengine/initslider-1.js"></script>
    	<!-- End of head section HTML codes -->


    	<!--  jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

		<!-- JavaScript for Calendar -->
	 	<script>
    	$(document).ready(function(){
      	var date_input=$('input[name="birthday"]');
      	var container=$('.modal-body form').length>0 ? $('.modal-body form').parent() : "body";
      	var options={
        	format: 'yyyy-mm-dd',
        	container: container,
        	todayHighlight: true,
        	autoclose: true,
      	};
      	
      	date_input.datepicker(options);
    	})
		</script>


		
		<!-- JavaScript for Email Validation -->
		<script>
		function validateForm() {
    	var x = document.forms["myForm"]["email"].value;
    	var atpos = x.indexOf("@");
    	var dotpos = x.lastIndexOf(".");
    	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        	alert("Sorry, This is not a valid e-mail address. Try again");
        	return false;
    	}
		}
		</script>




	</head>

	<body>

			<?php
				include '../includes/masterPage.php';
				createSignInUpNavBar();
			?>

	<div>
	<h1>
	Benefits Of Signing Up

	</h1>

	</div>

	<div>

   <ul class="list-group">
  <li class="list-group-item" >Be part of a community of people who share your same passion</li>
  <li class="list-group-item">Create your own recipes and share them with your friends</li>
  <li class="list-group-item">Discover new recipes</li>
  <li class="list-group-item">Be rewarded for your passion</li>
  <li class="list-group-item">Have fun</li>
	</ul>


	</div>			


		
	<!-- SIGN UP -->

	<div class="container-fluid">

	<h4>Sign Up</h4>

	<form name = "myForm" action = "../app_code/collect_newUserInfo.php" onsubmit ="return validateForm();" method = "post">
	
	<button type="button" class="btn btn-success center-block" data-toggle="modal" data-target="#popUpWindow" >Enter Details</button>
	
	<div class="modal fade" id="popUpWindow">
		<div class="modal-dialog">
			<div class="model-content">
			
				
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Sign Up</h3>
			</div>
			
			<div class="modal-body">
				<form role="form" >
					<div class="form-group">
						<input type="username" class="form-control" placeholder="Username" name="UserID">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="Password">
					</div>
					<div class = "form-group">
						<input type="text" class = "form-control" placeholder = "First Name" name="fName">
					</div>
					<div class = "form-group">
						<input type="text" class = "form-control" placeholder = "Last Name" name="lName">
					</div>
					<div class = "form-group">
						<input type="text" class = "form-control" placeholder = "Email" name="email">
					</div>
					<div class = "form-group">
						<input type="text" class = "form-control" placeholder = "Phone Number" name="phoneNumber">
					</div>

					<div class = "form-group" style ="font-size: 20px; font-weight: bold; background-color: grey">
					<label class="control-label" for="birthday">Select your Birthday</label>
       				<input class="form-control" id="birthday" name="birthday" placeholder="YYYY-MM-DD" type="text"/>
					</div>
				

					<div class = "form-group" style ="font-size: 20px; font-weight: bold; background-color: grey">
						<label>Select your Gender</label>
						<div id="radio-form">
							<div class = "radio">
								<label><input type = "radio" name = "gender" value = "M">Male</label>
							</div>
							<div class = "radio">
								<label><input type = "radio" name = "gender" value = "F">Female</label>
							</div>
							<div class = "radio">
							<label><input type = "radio" name = "gender" value = "O">Other</label>
							</div>
						</div>
					</div>
					</form>

					
			
				

			</div>

			
			<div class="modal-footer">
			<button class="btn btn-primary">Sign Up</button>
			
			
			</div>
			</div>
		</div>
		</div>
		</div>
		<!--</form>-->



   
<!--
 <div class"container">
        <div class"row topspace">
        <div class"col-md-12">
     Insert to your webpage where you want to display the slider 

    <div id="amazingslider-1" style="display:block; position:absolute; margin:16px auto 56px; max-height: 200px; max-width: 700px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="../rescources/images/food7.jpg" alt="Picture 1" /></li>
            <li><img src="../rescources/images/food9.jpg" alt="Picture 2" /></li>
            <li><img src="../rescources/images/food9.jpg" alt="Picture 1" /></li>
            <li><img src="../rescources/images/food7.jpg" alt="Picture 5" /></li>
        
        </ul>
    </div>

    End of body section HTML codes 
    </div></div></div>
    
	-->

	</body>

	</html>



    




	