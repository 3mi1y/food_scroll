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
			FoodCabulary - EAT, SHARE, ENJOY
			</h1>
			</div>
	
			<!--Carousel Functionality-->

				<div class= "container">
<div id="myCarousel" class= "carousel slide" data-ride= "carousel" data-interval="7000" style="width: 1000px; margin: 0 auto">
			<ol class ="carousel-indicators"  >
			<li data-target ="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target ="#myCarousel" data-slide-to="1"></li>
			<li data-target ="#myCarousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
			<div class="item active">
			<img src="../rescources/images/food4.jpg">
			<div class = "carousel-caption">
			
			</div>
			</div>
			<div class="item">
			<img src="../rescources/images/food2.jpg">
			<div class = "carousel-caption">
			
			</div>
			</div>
			<div class="item">
			<img src="../rescources/images/food3.jpg">
			<div class = "carousel-caption">
			
			</div>
			</div>

			</div>

<div>
<p>
Welcome to our great community of food lovers around the world! Join our passionate community where people love to eat, try and share delicious recipes! </br>
</p>
</div>
			

<div class = "container">
<footer class="footer">
“One cannot think well, love well, sleep well, if one has not dined well.” 
― Virginia Woolf, A Room of One's Own

</footer>
</div>
			

</body>
</html>


